<?php
/* @var $this HomeController */
/* @var $model HomeModel */

$this->breadcrumbs=array(
	'Home Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HomeModel', 'url'=>array('index')),
	array('label'=>'Manage HomeModel', 'url'=>array('admin')),
);
?>

<h1>Create HomeModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>