<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $news = LastNewsAndMoviesModel::model()->findAllByAttributes(array('category'=>'Last News'));
        $newsTitle = LastNewsAndMoviesModel::model()->findByAttributes(array('category'=>'Last News'));
        $slider = SliderModel::model()->findAll();
        $this->render('index',array(
            'news'=>$news,
            'newsTitle'=>$newsTitle,
            'slider'=>$slider
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'contact-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
        
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->message, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }
    
//    function random_password( $length = 8 ) {
//    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//    $password = substr( str_shuffle( $chars ), 0, $length );
//    return $password;
//}
    
    public function actionForgotPassword(){
        
        $model = new ForgotForm();
        
        if (isset($_POST['ForgotForm'])) {
            $model->attributes = $_POST['ForgotForm'];
            $forgot = UsersModel::model()->findByAttributes(array('firstName'=>$model->firstname,'lastName'=>$model->lastname,'email'=>$model->email,'username'=>$model->login));
        if($forgot!==NULL){
            $this->redirect('updatepassword');
//         $password = $this->random_password(8);
//         $CryptPassword  = crypt($password);
//         UsersModel::model()->updateByPk($forgot->id, array('password'=>$CryptPassword));  
//         Yii::app()->user->setFlash('forgot', 'Thank you. Your login is '.$forgot->username."<br/> And your new password:<em> $password</em>");
//         $this->refresh();
        }
        else {
             Yii::app()->user->setFlash('forgotError', 'Incorrect data,please check fields');
         $this->refresh();
        }
        
            
        }
        
        $this->render('forgotPassword',array(
            'model'=>$model,
        ));
    }
    
    
    public function actionUpdatePassword(){
        $model = new UpdatePasswordForm();
        if (isset($_POST['UpdatePasswordForm'])) {
            $model->attributes = $_POST['UpdatePasswordForm'];
            $forgot = UsersModel::model()->findByAttributes(array('username'=>$model->username));
            if($forgot!==NULL && $model->password===$model->confirm){
                $password = $model->password;
                $CryptPassword  = crypt($model->password);
                 UsersModel::model()->updateByPk($forgot->id, array('password'=>$CryptPassword)); 
                 Yii::app()->user->setFlash('UpdatePassword', 'Thank you. Your login is '.$forgot->username."<br/> And your new password:<em> $password</em>");
                 $this->refresh();
            }
            
            else {
                 Yii::app()->user->setFlash('forgotUpdateError', 'Incorrect password,please repeat password fields');
                 $this->refresh();
            }
        }
        $this->render('updatePassword',array(
            'model'=>$model
        ));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Render view SignUp.
     */
    public function actionSignUp() {
        $model = new UsersModel;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'registration-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['UsersModel'])) {
            $model->attributes = $_POST['UsersModel'];
            if ($model->save()) {
                Yii::app()->user->setFlash('register', "<h3>Thank you for registration.</h3>");
                $this->refresh();
            }
        }
        $this->render('signUp',array(
            'model'=>$model,
              
        ));
    }
    
    public function actionFaq(){
        $model = FaqModel::model()->findAll();
        $this->render('faq',array(
                'model'=>$model
         ));
    }
    
    public function actionOurWorks(){
        $model = OurWorksModel::model()->findAll();
        $dataProvider = new CActiveDataProvider('OurWorksModel', array(
            'pagination' => array(
                'pageSize' => 12,
            ),
        ));
        $this->render('ourWorks',array(
            'model'=>$model,
            'dataProvider'=>$dataProvider    
        ));
    }
    
    public function actionSearch(){
        
    }
    
    public function actionBlog(){
        $model=new BlogModel('search');
         $model->unsetAttributes();  // clear any default values
                if(isset($_GET['BlogModel']))
        $model->attributes=$_GET['BlogModel'];
        $lastPost = BlogModel::model()->findAll(array(
            'order' => 'id DESC',
            "limit" => 5,
        ));
        $dataProvider = new CActiveDataProvider('BlogModel', array(
            'pagination' => array(
                'pageSize' => 3,
            ),
        ));
        $this->render('blog',array(
           'model'=>$model,
           'dataProvider' => $model->search(),
           'lastPost' => $lastPost,
        ));
    }
    
     
    
    public function actionPostView($post){
        $model = BlogModel::model()->findByAttributes(array('id'=>$post));
        $lastPost = BlogModel::model()->findAll(array(
            'order' => 'id DESC',
            "limit" => 5,
        ));
        $this->render('postView',array(
           'model'=>$model,
           'lastPost' => $lastPost  
        ));        
        
    }

}