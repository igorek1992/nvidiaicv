<?php
/* @var $this FaqController */
/* @var $model FaqModel */

$this->breadcrumbs=array(
	'Faq Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FaqModel', 'url'=>array('index')),
	array('label'=>'Create FaqModel', 'url'=>array('create')),
	array('label'=>'Update FaqModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FaqModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaqModel', 'url'=>array('admin')),
);
?>

<h1>View FaqModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'answer',
		'question',
		'faqId',
                'faqHrefId',
	),
)); ?>
