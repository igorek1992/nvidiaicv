<?php
/* @var $this LastnewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Last News And Movies Models',
);

$this->menu=array(
	array('label'=>'Create LastNewsAndMoviesModel', 'url'=>array('create')),
	array('label'=>'Manage LastNewsAndMoviesModel', 'url'=>array('admin')),
);
?>

<h1>Last News And Movies Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
