<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
        'htmlOptions'=>array('class'=>'form-search'))); ?>
	<div class="input-append">
		<?php echo $form->textField($model,'title',array('class'=>'span2 search-query','placeholder'=>'Search posts')); ?>
		<?//php echo CHtml::submitButton('',array('class'=>'btn')); ?>
            <button type="submit" class="btn"><i class="icon-search"></i></button>
	</div>
<?php $this->endWidget(); ?>