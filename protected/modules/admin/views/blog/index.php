<?php
/* @var $this BlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog Models',
);

$this->menu=array(
	array('label'=>'Create BlogModel', 'url'=>array('create')),
	array('label'=>'Manage BlogModel', 'url'=>array('admin')),
);
?>

<h1>Blog Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
