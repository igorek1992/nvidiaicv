<?php
/* @var $this HomeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Home Models',
);

$this->menu=array(
	array('label'=>'Create HomeModel', 'url'=>array('create')),
	array('label'=>'Manage HomeModel', 'url'=>array('admin')),
);
?>

<h1>Home Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
