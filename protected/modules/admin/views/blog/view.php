<?php
/* @var $this BlogController */
/* @var $model BlogModel */

$this->breadcrumbs=array(
	'Blog Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List BlogModel', 'url'=>array('index')),
	array('label'=>'Create BlogModel', 'url'=>array('create')),
	array('label'=>'Update BlogModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BlogModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlogModel', 'url'=>array('admin')),
);
?>

<h1>View BlogModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'image',
		'shirtDesc',
		'fullDesc',
	),
)); ?>
