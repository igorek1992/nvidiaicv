<?php
/* @var $this OurWorksController */
/* @var $model OurWorksModel */

$this->breadcrumbs=array(
	'Our Works Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OurWorksModel', 'url'=>array('index')),
	array('label'=>'Create OurWorksModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#our-works-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Our Works Models</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'our-works-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            'name' => 'image',
            'type' => 'image',
            'htmlOptions'=>array('class'=>'myclass'),
            'value' => '$data->getImage()',
        ),
		'title',
		
              array(
            
            'name' => 'imageContent',
            'type' => 'image',
            'htmlOptions'=>array('class'=>'myclass'),
            'value' => '$data->getImageContent()',
        ),
		array(
            'name'=>'content',
            'type'=>'shortText'
        ),
        
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
