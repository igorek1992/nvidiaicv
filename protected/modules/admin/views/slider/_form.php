<?php
/* @var $this SliderController */
/* @var $model SliderModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slider-model-form',
	'enableAjaxValidation'=>false,
     'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
                <?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textarea($model,'description',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonName'); ?>
		<?php echo $form->textField($model,'buttonName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'buttonName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonUrl'); ?>
		<?php echo $form->textField($model,'buttonUrl',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'buttonUrl'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active',array('value'=>'active', 'uncheckValue'=>'')); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->