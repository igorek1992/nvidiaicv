<?php
/* @var $this SliderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Slider Models',
);

$this->menu=array(
	array('label'=>'Create SliderModel', 'url'=>array('create')),
	array('label'=>'Manage SliderModel', 'url'=>array('admin')),
);
?>

<h1>Slider Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
