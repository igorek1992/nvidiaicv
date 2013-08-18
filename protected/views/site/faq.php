<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>The Bootbusiness frequently asked questions</h1>
        </div>  
        <div class="row">
          <div class="span10 offset1">
            <div class="accordion" id="faqAccordion">
                <?php foreach($model as $value): ?>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <h4>
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faqAccordion" href="<?php echo $value->faqHrefId?>">
                      <i class="icon-question-sign"></i> <?php echo $value->answer; ?>
                    </a>
                  </h4>
                </div>
                <div id="<?php echo $value->faqId?>" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      <?php echo $value->question; ?>
                    </p>
                  </div>
                </div>
              </div>
                <?php endforeach;?>
           </div>
          </div>
        </div>
      </div>
    </div>