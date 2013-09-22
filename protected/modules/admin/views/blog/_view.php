<?php
/* @var $this BlogController */
/* @var $data BlogModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shirtDesc')); ?>:</b>
	<?php echo CHtml::encode($data->shirtDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullDesc')); ?>:</b>
	<?php echo CHtml::encode($data->fullDesc); ?>
	<br />


</div>