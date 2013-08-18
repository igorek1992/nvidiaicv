<?php
/* @var $this OurWorksController */
/* @var $model OurWorksModel */

$this->breadcrumbs=array(
	'Our Works Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OurWorksModel', 'url'=>array('index')),
	array('label'=>'Create OurWorksModel', 'url'=>array('create')),
	array('label'=>'View OurWorksModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OurWorksModel', 'url'=>array('admin')),
);
?>

<h1>Update OurWorksModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>