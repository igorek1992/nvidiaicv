<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Our works <small>caption for your works</small></h1>
        </div>
        <div class="row">
          <div class="span12">
            <ul class="thumbnails">
                <?php foreach($model as $value): ?>
              <li class="span3">
                <a href="<?php echo $value->href; ?>" class="thumbnail" data-toggle="modal">
                  <img src="<?php echo "/uploads/OurWorks/$value->id/$value->image"; ?>">
                </a>
                <!-- Start: Modal -->
                <div class="modal hide fade" id="<?php echo $value->hrefId; ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioList" aria-hidden="true">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel"><?php echo $value->title; ?></h3>                    
                  </div>
                  <div class="modal-body">
                    <div class="center-align">
                      <img src="<?php echo "/uploads/OurWorks/$value->id/$value->imageContent"; ?>" class="bottom-space-less thumbnail" alt="image name">
                    </div>
                    <p>
                      <?php echo $value->content; ?>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>
                </div>
                <!-- End: Modal -->
              </li>
              <?php endforeach; ?>
                                                      
            </ul>
            <div class="pagination pagination-centered">
              <ul>
                <li class="disabled">
                  <a href="#">&laquo;</a>
                </li>
                <li class="active">
                  <a href="#">1</a>
                </li>
                <li>
                  <a href="#">2</a>
                </li>
                <li>
                  <a href="#">3</a>
                </li>
                <li>
                  <a href="#">4</a>
                </li>
                <li>
                  <a href="#">5</a>
                </li>
                <li>
                  <a href="#">6</a>
                </li>
                <li>
                  <a href="#">&raquo;</a>
                </li>
              </ul>
            </div>
          </div>                                     
        </div>          
      </div>
    </div>