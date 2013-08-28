<?php
/* @var $this LastnewsController */
/* @var $model LastNewsAndMoviesModel */

$this->breadcrumbs=array(
	'Last News And Movies Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LastNewsAndMoviesModel', 'url'=>array('index')),
	array('label'=>'Manage LastNewsAndMoviesModel', 'url'=>array('admin')),
);
?>

<h1>Create LastNewsAndMoviesModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>