<?php
/* @var $this SliderController */
/* @var $model SliderModel */

$this->breadcrumbs=array(
	'Slider Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SliderModel', 'url'=>array('index')),
	array('label'=>'Create SliderModel', 'url'=>array('create')),
	array('label'=>'View SliderModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SliderModel', 'url'=>array('admin')),
);
?>

<h1>Update SliderModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>