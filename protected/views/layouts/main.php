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
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome-ie7.css" rel="stylesheet">
        <!-- Bootbusiness theme -->
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/boot-business.css" rel="stylesheet">
        <?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>   



    </head>
    <body>


        <!-- Start: HEADER -->
        <header>

            <!-- Start: Navigation wrapper -->
            <div class="navbar navbar-fixed-top">

                <div class="navbar-inner">
                    <div class="container">
                        <a href="/" class="brand brand-bootbus">Cinema.com</a>
                        <!-- Below button used for responsive navigation -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Start: Primary navigation -->
                        <div class="nav-collapse collapse">        
                            <ul class="nav pull-right">

                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('blog') ?>"><?php echo Yii::t('app', 'Blog'); ?></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Yii::t('app', 'Cinema'); ?><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo Yii::app()->createAbsoluteUrl('ourworks') ?>"><?php echo Yii::t('app', 'News'); ?></a></li>
                                        <li><a href="patnerships.html">Parnerships</a></li>
                                        <li><a href="leadership.html">Leadership</a></li>
                                        <li><a href="events.html">Events</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('faq') ?>"><?php echo Yii::t('app', 'FAQ'); ?></a></li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('contact') ?>"><?php echo Yii::t('app', 'Contact us'); ?></a></li>
                                <?php if (Yii::app()->user->isGuest): ?>
                                    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('signup') ?>"><?php echo Yii::t('app', 'Sign up'); ?></a></li>
                                    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('login') ?>"><?php echo Yii::t('app', 'Sign in'); ?></a></li>
                                <?php endif; ?>
                                <?php if (!Yii::app()->user->isGuest): ?>
                                    <li><a href="<?php echo Yii::app()->createAbsoluteUrl('logout') ?>"><?php echo Yii::t('app', 'Exit'); ?></a></li>
                                <?php endif; ?>
                                <li class="dropdown"> <?php $this->widget('application.components.widgets.LanguageSelector'); ?></li>
                            </ul>
                        </div>
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
                        <h4><i class="icon-beaker icon-white"></i> Cinema</h4>
                        <nav>
                            <ul class="quick-links">
                                <li><a href="ourworks">News</a></li>
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
                                                <li><a href="faq">FAQ</a></li>
                                                <li><a href="contact">Contact us</a></li>            
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
                                    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
                                    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/boot-business.js"></script>

                                    <!-- End: FOOTER -->
                                    </body>
                                    </html>
