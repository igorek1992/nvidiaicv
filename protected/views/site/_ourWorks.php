<li class="span3">
    <a href="#portfolioModal<?php echo $data->id; ?>" class="thumbnail" data-toggle="modal">
        <img src="<?php echo "/uploads/OurWorks/$data->id/$data->image"; ?>">
    </a>
    <!-- Start: Modal -->
    <div class="modal hide fade" id="portfolioModal<?php echo $data->id; ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioList" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"><?php echo $data->title; ?></h3>                    
        </div>
        <div class="modal-body">
            <div class="center-align">
                <img src="<?php echo "/uploads/OurWorks/$data->id/$data->imageContent"; ?>" class="bottom-space-less thumbnail" alt="image name">
            </div>
            <p class="mymodalp">
                <?php echo $data->content; ?>
            </p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <!-- End: Modal -->
</li>
