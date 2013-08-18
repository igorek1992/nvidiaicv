<?php
/* @var $this FaqController */
/* @var $data FaqModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
	<?php echo CHtml::encode($data->question); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faqId')); ?>:</b>
	<?php echo CHtml::encode($data->faqId); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('faqHrefId')); ?>:</b>
	<?php echo CHtml::encode($data->faqHrefId); ?>
	<br />


</div>