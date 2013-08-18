<?php
/* @var $this FaqController */
/* @var $model FaqModel */

$this->breadcrumbs=array(
	'Faq Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaqModel', 'url'=>array('index')),
	array('label'=>'Manage FaqModel', 'url'=>array('admin')),
);
?>

<h1>Create FaqModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>