<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faq Models',
);

$this->menu=array(
	array('label'=>'Create FaqModel', 'url'=>array('create')),
	array('label'=>'Manage FaqModel', 'url'=>array('admin')),
);
?>

<h1>Faq Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
