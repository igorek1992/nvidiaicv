<?php
/* @var $this HomeController */
/* @var $model HomeModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'home-model-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

		<div class="row">
		<?php echo $form->labelEx($model,'productTitle'); ?>
		<?php echo $form->textField($model,'productTitle',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'productTitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productContent'); ?>
		<?php echo $form->textField($model,'productContent',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'productContent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productImage'); ?>
		<?php echo $form->textField($model,'productImage',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'productImage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buyNowUrl'); ?>
		<?php echo $form->textField($model,'buyNowUrl',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'buyNowUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'readMoreUrl'); ?>
		<?php echo $form->textField($model,'readMoreUrl',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'readMoreUrl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->