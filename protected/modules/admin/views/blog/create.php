<?php
/* @var $this BlogController */
/* @var $model BlogModel */

$this->breadcrumbs=array(
	'Blog Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BlogModel', 'url'=>array('index')),
	array('label'=>'Manage BlogModel', 'url'=>array('admin')),
);
?>

<h1>Create BlogModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>