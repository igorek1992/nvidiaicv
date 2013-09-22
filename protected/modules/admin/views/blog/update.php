<?php
/* @var $this BlogController */
/* @var $model BlogModel */

$this->breadcrumbs=array(
	'Blog Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BlogModel', 'url'=>array('index')),
	array('label'=>'Create BlogModel', 'url'=>array('create')),
	array('label'=>'View BlogModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BlogModel', 'url'=>array('admin')),
);
?>

<h1>Update BlogModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>