<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Nvidia login</h1>
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
        ));
        ?>
        <div class="row">
            <div class="span6 offset3">
                <h4 class="widget-header"><i class="icon-lock"></i> Login to Nvidia</h4>
                <div class="widget-body">
                    <div class="center-align">
                        
                        <?php echo $form->labelEx($model, 'username'); ?>
                        <?php echo $form->textField($model, 'username'); ?>
                        <?php echo $form->error($model, 'username'); ?>

                        <?php echo $form->labelEx($model, 'password'); ?>
                        <?php echo $form->passwordField($model, 'password'); ?>
                        <?php echo $form->error($model, 'password'); ?>
                        <div class="remember-me">
                            <div class="pull-left">
                                <label class="checkbox">
                                    <?php echo $form->checkBox($model, 'rememberMe'); ?>
                                    <?php echo $form->label($model, 'rememberMe'); ?>
                                    <?php echo $form->error($model, 'rememberMe'); ?>
                                </label>
                            </div>
                            <div class="pull-right">
                                <a href="forgot">Forgot password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-large bottom-space')); ?>
                        <h4><i class="icon-question-sign"></i> Don't have an account?</h4>
                        <?php echo CHtml::linkButton('Sign up', array('submit'=>array('signup'),'class' => 'btn btn-large bottom-space')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
