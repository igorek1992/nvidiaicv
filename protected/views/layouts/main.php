<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bootbusiness | Short description about company">
        <meta name="author" content="Your name">
        <title>Bootbusiness | Give unique title of the page here</title>
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap responsive -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!-- Font awesome - iconic font with IE7 support --> 
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css" rel="stylesheet">
        <!-- Bootbusiness theme -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/boot-business.css" rel="stylesheet">
        <?php Yii::app()->getComponent("bootstrap"); ?>
        
        
    </head>
    <body>
        <!-- Start: HEADER -->
        <header>
            <!-- Start: Navigation wrapper -->
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a href="index.html" class="brand brand-bootbus">Bootbusiness</a>
                        <!-- Below button used for responsive navigation -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Start: Primary navigation -->
                        <?php
                        $this->widget('bootstrap.widgets.TbNavbar', array(
                            'type' => 'inverse',
                            'brand' => false, // null or 'inverse'
                            'brandUrl' => '#',
                            'htmlOptions' => array('class' => 'pull-right'),
                            'collapse' => true, // requires bootstrap-responsive.css
                            'items' => array(
                                array(
                                    'class' => 'bootstrap.widgets.TbMenu',
                                    'items' => array(
                                        array('label' => 'Home', 'url' => '/'),
                                        array('label' => 'Products and Services', 'url' => '#', 'items' => array(
                                                array('label' => 'Product', 'url' => 'product.html'),
                                                array('label' => 'All products', 'url' => 'all_products.html'),
                                                '---',
                                                array('label' => 'Services'),
                                                array('label' => 'Service', 'url' => 'service.html'),
                                                array('label' => 'All services', 'url' => 'all_services.html'),
                                            )),
                                        array('label' => 'About', 'url' => '#', 'items' => array(
                                                array('label' => 'Our works', 'url' => 'our_works.html'),
                                                array('label' => 'Parnerships', 'url' => 'patnerships.html'),
                                                array('label' => 'Leadership', 'url' => 'leadership.html'),
                                                array('label' => 'News', 'url' => 'news.html'),
                                                array('label' => 'Events', 'url' => 'events.html'),
                                                array('label' => 'Blog', 'url' => 'blog.html'),
                                            )),
                                        array('label' => 'Faq', 'url' => 'site/faq'),
                                        array('label' => 'Contact us', 'url' => 'contact_us.html'),
                                        array('label' => 'Sign up', 'url' => 'signup','visible' => Yii::app()->user->isGuest),
                                        array('label' => 'Sign in', 'url' => 'login','visible' => Yii::app()->user->isGuest),
                                        array('label' => 'Exit', 'url' => array('/logout'), 'visible' => !Yii::app()->user->isGuest)
                                    ),
                                ),
                            ),
                        ));
                        ?>                                
                    </div>
                </div>
            </div>
            <!-- End: Navigation wrapper -->   
        </header>
        <!-- End: HEADER -->
        <?php echo $content; ?>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="span2">
                        <h4><i class="icon-star icon-white"></i> Products</h4>
                        <nav>
                            <ul class="quick-links">
                                <li><a href="product.html">Product1</a></li>
                                <li><a href="product.html">Product2</a></li>
                                <li><a href="product.html">Product3</a></li>
                                <li><a href="all_products.html">All products</a></li>
                            </ul>
                        </nav>
                        <h4><i class="icon-cogs icon-white"></i> Services</h4>
                        <nav>
                            <ul class="quick-links">
                                <li><a href="service.html">Service1</a></li>
                                <li><a href="service.html">Service2</a></li>
                                <li><a href="service.html">Service3</a></li>
                                <li><a href="all_services.html">All services</a></li>              
                            </ul>
                        </nav>
                    </div>
                    <div class="span2">
                        <h4><i class="icon-beaker icon-white"></i> About</h4>
                        <nav>
                            <ul class="quick-links">
                                <li><a href="our_works.html">Our works</a></li>
                                <li><a href="patnerships.html">Patnerships</a></li>
                                <li><a href="leadership.html">Leadership</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <ul>
                                    </nav>          
                                    </div>
                                    <div class="span2">
                                        <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
                                        <nav>
                                            <ul class="quick-links">
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="contact_us.html">Contact us</a></li>            
                                            </ul>
                                        </nav>
                                        <h4><i class="icon-legal icon-white"></i> Legal</h4>
                                        <nav>
                                            <ul class="quick-links">
                                                <li><a href="#">License</a></li>
                                                <li><a href="#">Terms of Use</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Security</a></li>      
                                            </ul>
                                        </nav>            
                                    </div>
                                    <div class="span3">
                                        <h4>Get in touch</h4>
                                        <div class="social-icons-row">
                                            <a href="#"><i class="icon-twitter"></i></a>
                                            <a href="#"><i class="icon-facebook"></i></a>
                                            <a href="#"><i class="icon-linkedin"></i></a>                                         
                                        </div>
                                        <div class="social-icons-row">
                                            <a href="#"><i class="icon-google-plus"></i></a>              
                                            <a href="#"><i class="icon-github"></i></a>
                                            <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
                                        </div>
                                        <div class="social-icons-row">
                                            <i class="icon-phone icon-large phone-number"></i> +3 8 066 15-00-702
                                        </div>
                                    </div>      
                                    <div class="span3">
                                        <h4>Get updated by email</h4>
                                        <form>
                                            <input type="text" name="email" placeholder="Email address">
                                            <input type="submit" class="btn btn-primary" value="Subscribe">
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                    <hr class="footer-divider">
                                    </footer>

                                    <!-- End: FOOTER -->
                                    </body>
                                    </html>
