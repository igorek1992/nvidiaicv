<?php
$this->breadcrumbs=array(
    'Blogs',
);
 
$this->menu=array(
    array('label'=>'Create Blogs', 'url'=>array('create')),
    array('label'=>'Search Blogs', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search', "
$('.form-search form').change(function(){
    $.fn.yiiListView.update('blogslistview', { 
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");
?>
<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Cinema Blog</h1>
        </div>
        <div class="row">
          <div class="span7">
            <?php
                    $this->widget('zii.widgets.CListView', array(
//                        'class'=>'blogslistview',
                        'id'=>'blogslistview',  
                        'dataProvider' => $dataProvider,
                        'itemView' => '_blog',
                        'ajaxUpdate' => false,
                        'template' => "{items}\n{pager}",
                        'summaryText' => '',
                        'pager' => array(
                            'class'=>'MyCLinkPager',
                            'header' => false,
                            'htmlOptions' => array('class' => 'pagination pagination-centered'),
                            
                        ),
                    ));
                    ?>
           
          </div>
          <div class="span4 pull-right sidebar">
            
              <?php $this->renderPartial('_search',array(
                'model'=>$model,
            )); ?>
<!--            <form class="form-search">
              <div class="input-append">
              <input type="text" class="span2 search-query" placeholder="Search posts">
              <button type="submit" class="btn"><i class="icon-search"></i></button>
              </div>
            </form>-->
            <h5>Recent posts</h5>
            <?php foreach($lastPost as $value):?>
            <h4>
              <a href="<?php echo Yii::app()->createAbsoluteUrl('site/postview/post/' . $value->id) ?>"><?php echo $value->title ?></a><br>
            </h4>
           <?php endforeach;?>                                                              
          </div>          
        </div>
      </div>
    </div>