<?php
/* @var $this OurWorksController */
/* @var $model OurWorksModel */

$this->breadcrumbs=array(
	'Our Works Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OurWorksModel', 'url'=>array('index')),
	array('label'=>'Manage OurWorksModel', 'url'=>array('admin')),
);
?>

<h1>Create OurWorksModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>