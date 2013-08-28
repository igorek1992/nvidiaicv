<?php
/* @var $this LastnewsController */
/* @var $model LastNewsAndMoviesModel */

$this->breadcrumbs=array(
	'Last News And Movies Models'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LastNewsAndMoviesModel', 'url'=>array('index')),
	array('label'=>'Create LastNewsAndMoviesModel', 'url'=>array('create')),
	array('label'=>'View LastNewsAndMoviesModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LastNewsAndMoviesModel', 'url'=>array('admin')),
);
?>

<h1>Update LastNewsAndMoviesModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>