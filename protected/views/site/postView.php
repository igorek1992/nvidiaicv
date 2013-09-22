<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Cinema View Post</h1>
        </div>
        <div class="row">
          <div class="span7">
            <article class="post-row article">
              <h3>
                <?php echo $model->title; ?>
                <small>October 2, 2012</small>
              </h3>
              <img src="<?php echo "/uploads/Blog/$model->id/$model->image"; ?>" class="thumbnail bottom-space">
              <?php echo $model->fullDesc; ?>
            </article>
            <ul class="pager">
              <li class="previous">
                  <?php if(BlogModel::model()->getOlderId($model->id)!="#"): ?>
                  <a href="<?php echo Yii::app()->createAbsoluteUrl('site/postview/post/' .BlogModel::model()->getOlderId($model->id)) ?>">&larr; Older</a>
                  <?php else:?>
                  <a href="<?php echo Yii::app()->createAbsoluteUrl('blog');?>">&larr; Go to Blog</a>
                  <?php endif;?>
              </li>
              <li class="next">
                  <?php if(BlogModel::model()->getNewerId($model->id)!="#"): ?>
                  <a href="<?php echo Yii::app()->createAbsoluteUrl('site/postview/post/' .BlogModel::model()->getNewerId($model->id)) ?>">Newer &rarr;</a>
                  <?php endif;?>
                
              </li>
            </ul>
          </div>
          <div class="span4 pull-right sidebar">
            <form class="form-search">
              <div class="input-append">
              <input type="text" class="span2 search-query" placeholder="Search posts">
              <button type="submit" class="btn"><i class="icon-search"></i></button>
              </div>
            </form>
            <h5>Recent posts in this category</h5>
            <?php foreach($lastPost as $value):?>
            <h4>
              <a href="<?php echo Yii::app()->createAbsoluteUrl('site/postview/post/' . $value->id) ?>"><?php echo $value->title ?></a><br>
            </h4>
           <?php endforeach;?>
            
          </div>          
        </div>
      </div>
    </div>