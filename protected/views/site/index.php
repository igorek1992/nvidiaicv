<!-- Start: MAIN CONTENT -->
<div class="content">
    <!-- Start: slider -->
    <div class="slider">
        <div class="container-fluid">
            <div id="heroSlider" class="carousel slide">
                <div class="carousel-inner">
                    <?php foreach($slider as $value): ?>
                    <div class="<?php echo $value->active;?> item">
                        <div class="hero-unit">
                            <div class="row-fluid">
                                <div class="span7 marketting-info">
                                    <h1><?php echo $value->title; ?></h1>
                                    <p>
                                        <?php echo $value->description; ?>
                                    </p>
                                    <h3>
                                        <a href="<?php echo $value->buttonUrl; ?>" class="btn"><?php echo $value->buttonName; ?></a>
                                    </h3>                      
                                </div>
                                <div class="span5">
                                    <img src="<?php echo "/uploads/Slider/$value->id/$value->image"; ?>" class="thumbnail">
                                </div>
                            </div>                  
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
            </div>
        </div>
    </div>
    <!-- End: slider -->
    <!-- Start: PRODUCT LIST -->
    <div class="container">
        <div class="page-header">
            <h2><?php echo $newsTitle->category; ?></h2>
        </div>
            <div class="row-fluid">
            <ul class="custom_thumbnails">
                <?php foreach ($news as $value): ?>
                <li class="span4">
                    <div class="custom_thumbnail">
                        <img src="<?php echo "/uploads/LastNewsAndMovies/$value->id/$value->image"; ?>" alt="product name">
                        <div class="caption">
                            <h3><?php echo $value->title; ?></h3>
                            <p>
                                <?php echo $value->content; ?>
                            </p>
                        </div>
                        <div class="widget-footer">
                            <p>
                                <a href="<?php echo $value->buttonUrl; ?>" class="btn"><?php echo Yii::t('app',$value->buttonName); ?></a>
                            </p>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>        
            </ul>
        </div>
        
       
    </div>
    <!-- End: PRODUCT LIST -->
</div>
<!-- End: MAIN CONTENT -->
<!-- Start: FOOTER -->


