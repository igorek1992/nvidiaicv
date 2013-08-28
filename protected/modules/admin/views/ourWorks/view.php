<?php
/* @var $this OurWorksController */
/* @var $model OurWorksModel */

$this->breadcrumbs=array(
	'Our Works Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OurWorksModel', 'url'=>array('index')),
	array('label'=>'Create OurWorksModel', 'url'=>array('create')),
	array('label'=>'Update OurWorksModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OurWorksModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OurWorksModel', 'url'=>array('admin')),
);
?>

<h1>View OurWorksModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'title',
		'imageContent',
		'content',
   ),
)); ?>
