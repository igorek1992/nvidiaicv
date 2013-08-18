<?php
/* @var $this OurWorksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Our Works Models',
);

$this->menu=array(
	array('label'=>'Create OurWorksModel', 'url'=>array('create')),
	array('label'=>'Manage OurWorksModel', 'url'=>array('admin')),
);
?>

<h1>Our Works Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
