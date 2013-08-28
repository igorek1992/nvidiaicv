<?php
/* @var $this SliderController */
/* @var $model SliderModel */

$this->breadcrumbs=array(
	'Slider Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List SliderModel', 'url'=>array('index')),
	array('label'=>'Create SliderModel', 'url'=>array('create')),
	array('label'=>'Update SliderModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SliderModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SliderModel', 'url'=>array('admin')),
);
?>

<h1>View SliderModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'title',
		'description',
		'buttonName',
		'buttonUrl',
	),
)); ?>
