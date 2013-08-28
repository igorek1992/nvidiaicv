<?php
/* @var $this SliderController */
/* @var $model SliderModel */

$this->breadcrumbs=array(
	'Slider Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SliderModel', 'url'=>array('index')),
	array('label'=>'Create SliderModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#slider-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Slider Models</h1>

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
	'id'=>'slider-model-grid',
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
		'description',
		'buttonName',
		'buttonUrl',
                'active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
