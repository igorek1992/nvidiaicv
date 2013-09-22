    <article class="post-row article">
        <h3>
            <a href="<?php echo Yii::app()->createAbsoluteUrl('site/postview/post/' . $data->id) ?>"><?php echo $data->title ?></a>
            <small><?php echo Yii::app()->dateFormatter->formatDateTime($data->date, 'full',  false);?></small>
        </h3>
        <img src="<?php echo "/uploads/Blog/$data->id/$data->image"; ?>" class="thumbnail bottom-space">
        <p>
            <?php echo $data->shirtDesc ?>
        </p>
    </article>