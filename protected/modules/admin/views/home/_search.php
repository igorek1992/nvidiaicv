<?php
/* @var $this HomeController */
/* @var $model HomeModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'productTitle'); ?>
		<?php echo $form->textField($model,'productTitle',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productContent'); ?>
		<?php echo $form->textField($model,'productContent',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'productImage'); ?>
		<?php echo $form->textField($model,'productImage',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buyNowUrl'); ?>
		<?php echo $form->textField($model,'buyNowUrl',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'readMoreUrl'); ?>
		<?php echo $form->textField($model,'readMoreUrl',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->