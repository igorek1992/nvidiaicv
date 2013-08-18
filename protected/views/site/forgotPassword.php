<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Forgot';
$this->breadcrumbs = array(
    'Forgot',
);
?>
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Nvidia Forgot Password</h1>
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'forgot-form',
        
        ));
        ?>
        <div class="row">
            <div class="span6 offset3">
                <h4 class="widget-header"><i class="icon-lock"></i> Enter your First Name, Last Name and Login to Nvidia</h4>
                <div class="widget-body">
                    <div class="center-align">
                        <?php if (Yii::app()->user->hasFlash('forgot')): ?>
                        <?php echo Yii::app()->user->getFlash('forgot'); ?>
                        <?php else: ?>
                        <?php echo $form->labelEx($model, 'firstname'); ?>
                        <?php echo $form->textField($model, 'firstname'); ?>
                        <?php echo $form->error($model, 'firstname'); ?>
                        
                        <?php echo $form->labelEx($model, 'lastname'); ?>
                        <?php echo $form->textField($model, 'lastname'); ?>
                        <?php echo $form->error($model, 'lastname'); ?>
                        
                        <?php echo $form->labelEx($model, 'email'); ?>
                        <?php echo $form->textField($model, 'email'); ?>
                        <?php echo $form->error($model, 'email'); ?>
                        
                        <?php echo $form->labelEx($model, 'login'); ?>
                        <?php echo $form->textField($model, 'login'); ?>
                        <?php echo $form->error($model, 'login'); ?>
                        
                        
                        <br/>
                        <?php if (Yii::app()->user->hasFlash('forgotError')): ?>
                        <?php echo Yii::app()->user->getFlash('forgotError'); ?>
                        <?php endif;?>
                     
                            
                     <div class="clearfix"></div>
                        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-large bottom-space')); ?>
                        <?php endif;?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->endWidget(); ?>
