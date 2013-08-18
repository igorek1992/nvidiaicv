<?php
/* @var $this FaqController */
/* @var $model FaqModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faq-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textArea($model,'answer',array('rows' => 5, 'cols' => 30,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'question'); ?>
		<?php echo $form->textArea($model,'question',array('rows' => 6, 'cols' => 40,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'question'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faqId'); ?>
		<?php echo $form->textField($model,'faqId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'faqId'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'faqHrefId'); ?>
		<?php echo $form->textField($model,'faqHrefId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'faqHrefId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->