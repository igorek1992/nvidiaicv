<?php
/* @var $this OurWorksController */
/* @var $model OurWorksModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'our-works-model-form',
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
		<?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
                <?php echo $form->labelEx($model,'imageContent'); ?>
                <?php echo $form->fileField($model, 'imageContent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows' => 13, 'cols' => 59,'maxlength'=>2500)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->