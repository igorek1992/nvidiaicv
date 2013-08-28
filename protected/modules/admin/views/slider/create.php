<?php
/* @var $this SliderController */
/* @var $model SliderModel */

$this->breadcrumbs=array(
	'Slider Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SliderModel', 'url'=>array('index')),
	array('label'=>'Manage SliderModel', 'url'=>array('admin')),
);
?>

<h1>Create SliderModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>