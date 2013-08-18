<?php
/* @var $this FaqController */
/* @var $model FaqModel */

$this->breadcrumbs=array(
	'Faq Models'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqModel', 'url'=>array('index')),
	array('label'=>'Create FaqModel', 'url'=>array('create')),
	array('label'=>'View FaqModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FaqModel', 'url'=>array('admin')),
);
?>

<h1>Update FaqModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>