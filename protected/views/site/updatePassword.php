<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Update Password';
$this->breadcrumbs = array(
    'Update Password',
);
?>
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Nvidia Update Password</h1>
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'update-password-form',
        
        ));
        ?>
        <div class="row">
            <div class="span6 offset3">
                <h4 class="widget-header"><i class="icon-lock"></i> Enter your new Password for Nvidia</h4>
                <div class="widget-body">
                    <div class="center-align">
                        <?php if (Yii::app()->user->hasFlash('UpdatePassword')): ?>
                        <?php echo Yii::app()->user->getFlash('UpdatePassword'); ?>
                        <?php else: ?>
                        
                        <?php echo $form->labelEx($model, 'username'); ?>
                        <?php echo $form->textField($model, 'username'); ?>
                        <?php echo $form->error($model, 'username'); ?>
                        
                        <?php echo $form->labelEx($model, 'password'); ?>
                        <?php echo $form->passwordField($model, 'password'); ?>
                        <?php echo $form->error($model, 'password'); ?>
                        
                        <?php echo $form->labelEx($model, 'confirm'); ?>
                        <?php echo $form->passwordField($model, 'confirm'); ?>
                        <?php echo $form->error($model, 'confirm'); ?>
                        
                        
                        
                        <br/>
                        <?php if (Yii::app()->user->hasFlash('forgotUpdateError')): ?>
                        <?php echo Yii::app()->user->getFlash('forgotUpdateError'); ?>
                        <?php endif;?>
                     
                            
                     <div class="clearfix"></div>
                        <?php echo CHtml::submitButton('Update Password', array('class' => 'btn btn-large bottom-space')); ?>
                        <?php endif;?>    
                        <h4><i class="icon-question-sign"></i> Give a password?</h4>
                        <?php echo CHtml::linkButton('Sign in', array('submit'=>array('login'),'class' => 'btn btn-large bottom-space')); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
