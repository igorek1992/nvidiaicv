 <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
              <?php if (Yii::app()->user->hasFlash('contact')): ?>
                  <?php echo Yii::app()->user->getFlash('contact'); ?>
                  <?php else: ?>
              <?php
            $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'htmlOptions'=>array('class'=>'form-contact-us'),
            'enableClientValidation' => true,
            'enableAjaxValidation' => true,
            'clientOptions'=>array(
            'validateOnSubmit'=>true
           ),
        ));
        ?>  
              <div class="control-group">
                <div class="controls">
                  <?php echo $form->textField($model, 'name',array('placeholder'=>'Name')); ?>
                   <?php echo $form->error($model, 'name'); ?>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <?php echo $form->textField($model, 'email',array('placeholder'=>'Email')); ?>
                   <?php echo $form->error($model, 'email'); ?>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <?php echo $form->textArea($model, 'message',array('placeholder'=>'Message')); ?>
                   <?php echo $form->error($model, 'message'); ?>
                </div>
              </div>
              <?php if(CCaptcha::checkRequirements()): ?>
              <div class="control-group">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
	     </div>
		<?php echo $form->error($model,'verifyCode'); ?>
              </div>
            <?php endif; ?>
              <div class="control-group">
                <div class="controls">
                  <?php echo CHtml::submitButton('Send', array('class' => 'btn btn-primary btn-large')); ?>
                </div>
              </div>
              <?php $this->endWidget(); ?>
              <?php endif;?>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Offices</h2>
            </div>
            <h3>North America</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                USA<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Europe</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                UK<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Asia</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                India<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
    </div>
