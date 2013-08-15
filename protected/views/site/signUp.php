<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Registration to ICV</h1>
        </div>
          <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'registration-form',
            'htmlOptions'=>array('class'=>'form-horizontal form-signin-signup'),
            'enableClientValidation' => true,
            'enableAjaxValidation' => true,
            'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        ));
        ?>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of ICV</h4>
            <div class="widget-body">
              <div class="center-align">
                   <?php echo $form->textField($model, 'firstName',array('placeholder'=>'First Name')); ?>
                   <?php echo $form->error($model, 'firstName'); ?>

                   <?php echo $form->passwordField($model, 'lastName',array('placeholder'=>'Last Name')); ?>
                   <?php echo $form->error($model, 'lastName'); ?>
                    
                   <?php echo $form->passwordField($model, 'country',array('placeholder'=>'Country')); ?>
                   <?php echo $form->error($model, 'country'); ?>
                    
                   <?php echo $form->passwordField($model, 'city',array('placeholder'=>'City')); ?>
                   <?php echo $form->error($model, 'city'); ?>
                  
                   <?php echo $form->passwordField($model, 'email',array('placeholder'=>'Email')); ?>
                   <?php echo $form->error($model, 'email'); ?>
                  
                   <?php echo $form->passwordField($model, 'password',array('placeholder'=>'Password')); ?>
                   <?php echo $form->error($model, 'password'); ?>
                  
                   <?php echo $form->passwordField($model, 'confirm',array('placeholder'=>'Confirm Password')); ?>
                   <?php echo $form->error($model, 'confirm'); ?>
                  <div>
                    <?php echo CHtml::submitButton('Register', array('class' => 'btn btn-primary btn-large')); ?>
                  </div>
                
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <?php echo CHtml::linkButton('Sign in', array('class' => 'btn btn-large bottom-space')); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $this->endWidget(); ?>