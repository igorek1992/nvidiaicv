<?php
/* @var $this LastnewsController */
/* @var $model LastNewsAndMoviesModel */

$this->breadcrumbs=array(
	'Last News And Movies Models'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List LastNewsAndMoviesModel', 'url'=>array('index')),
	array('label'=>'Create LastNewsAndMoviesModel', 'url'=>array('create')),
	array('label'=>'Update LastNewsAndMoviesModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LastNewsAndMoviesModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LastNewsAndMoviesModel', 'url'=>array('admin')),
);
?>

<h1>View LastNewsAndMoviesModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image',
		'title',
		'content',
		'buttonName',
		'buttonUrl',
		'category',
                
            
	),
)); ?>
