<div class="content">
      <div class="container">
        <div class="page-header">
          <h1>MOVIE NEWS</h1>
        </div>
        <div class="row">
          <div class="span12">
            <ul class="thumbnails">
              <?php
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider' => $dataProvider,
                        'itemView' => '_ourWorks',
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
              
                                                      
            </ul>
              
<!--            <div class="pagination pagination-centered">
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
            </div>-->
          </div>                                     
        </div>          
      </div>
    </div>