<?php
/* @var $this HomeController */
/* @var $data HomeModel */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('productTitle')); ?>:</b>
    <?php echo CHtml::encode($data->productTitle); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('productContent')); ?>:</b>
    <?php echo CHtml::encode($data->productContent); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('productImage')); ?>:</b>
    <?php echo CHtml::encode($data->productImage); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('buyNowUrl')); ?>:</b>
    <?php echo CHtml::encode($data->buyNowUrl); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('readMoreUrl')); ?>:</b>
    <?php echo CHtml::encode($data->readMoreUrl); ?>
    <br />


</div>