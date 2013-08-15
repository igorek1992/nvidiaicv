<?php
/* @var $this HomeController */
/* @var $model HomeModel */

$this->breadcrumbs=array(
	'Home Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List HomeModel', 'url'=>array('index')),
	array('label'=>'Create HomeModel', 'url'=>array('create')),
	array('label'=>'Update HomeModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HomeModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HomeModel', 'url'=>array('admin')),
);
?>

<h1>View HomeModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'productTitle',
		'productContent',
		'productImage',
		'buyNowUrl',
		'readMoreUrl',
	),
)); ?>
