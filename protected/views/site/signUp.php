<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Nvidia Registration</h1>
        </div>
          
          <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'registration-form',
            'htmlOptions'=>array('class'=>'form-horizontal form-signin-signup'),
            'enableClientValidation' => true,
        
        ));
        ?>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of Nvidia</h4>
            <div class="widget-body">
              <div class="center-align">
                  <?php if (Yii::app()->user->hasFlash('register')): ?>
                  <?php echo Yii::app()->user->getFlash('register'); ?>
                  <?php else: ?>
                   <?php echo $form->textField($model, 'firstName',array('placeholder'=>'First Name')); ?>
                   <?php echo $form->error($model, 'firstName'); ?>

                   <?php echo $form->textField($model, 'lastName',array('placeholder'=>'Last Name')); ?>
                   <?php echo $form->error($model, 'lastName'); ?>
                    
                 <?php echo $form->dropDownList($model,'country',CHtml::listData(CountryModel::model()->findAll(), 'ID', 'Name'),
                            array('empty' => '- Select Country - ','class'=>'selectCountry','ajax' => array(
                            'type'=>'POST', 
                            'url'=>CController::createUrl('/ajax/LoadSubSpeciality'),
                            'update'=>'#UsersModel_city', 
                            'data'=>array('country'=>'js:this.value'),))); ?>
                  <br>
                    
                  <?php echo $form->dropDownList($model,'city',CHtml::listData(StateModel::model()->findAll(), 'ID', 'Name'),
                  array('class'=>'selectCountry','prompt' => ' - Select City - ')); ?>              
                  
                   <?php echo $form->textField($model, 'email',array('placeholder'=>'Email')); ?>
                   <?php echo $form->error($model, 'email'); ?>
                  
                  <?php echo $form->textField($model, 'username',array('placeholder'=>'Username')); ?>
                   <?php echo $form->error($model, 'username'); ?>
                  
                   <?php echo $form->passwordField($model, 'password',array('placeholder'=>'Password')); ?>
                   <?php echo $form->error($model, 'password'); ?>
                  
                   <?php echo $form->passwordField($model, 'confirm',array('placeholder'=>'Confirm Password')); ?>
                   <?php echo $form->error($model, 'confirm'); ?>
                  <div>
                    <?php echo CHtml::submitButton('Register', array('class' => 'btn btn-primary btn-large')); ?>
                  </div>
                  <?php endif; ?>
                <?php $this->endWidget(); ?>
                  
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <?php echo CHtml::linkButton('Sign in', array('submit'=>array('login'),'class' => 'btn btn-large bottom-space')); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
