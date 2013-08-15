<?php
/* @var $this HomeController */
/* @var $model HomeModel */

$this->breadcrumbs=array(
	'Home Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HomeModel', 'url'=>array('index')),
	array('label'=>'Create HomeModel', 'url'=>array('create')),
	array('label'=>'View HomeModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HomeModel', 'url'=>array('admin')),
);
?>

<h1>Update HomeModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>