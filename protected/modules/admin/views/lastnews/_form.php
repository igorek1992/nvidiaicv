<?php
/* @var $this LastnewsController */
/* @var $model LastNewsAndMoviesModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'last-news-and-movies-model-form',
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
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonName'); ?>
		<?php echo $form->textField($model,'buttonName',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'buttonName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buttonUrl'); ?>
		<?php echo $form->textField($model,'buttonUrl',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'buttonUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category',array('Select options:'=>  LastNewsAndMoviesModel::model()->getCategory())); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->