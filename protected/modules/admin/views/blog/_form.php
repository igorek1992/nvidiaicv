<?php
/* @var $this BlogController */
/* @var $model BlogModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-model-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title'); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shirtDesc'); ?>
		<?php echo $form->textArea($model,'shirtDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shirtDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullDesc'); ?>
		<?php echo $form->textArea($model,'fullDesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fullDesc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->