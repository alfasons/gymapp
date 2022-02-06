<?php
/* @var $this View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\web\View;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body >
        <?php $this->beginBody() ?>


        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Section Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="canvas-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="canvas-search search-switch">
                <i class="fa fa-search"></i>
            </div>
            <nav class="canvas-menu mobile-menu">
                <ul>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/index']); ?>">Home</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/information']); ?>">Information</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/wanted']); ?>">Wanted</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/workshop']); ?>">Workshop</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/gallery']); ?>">Gallery</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/featured']); ?>">Featured</a></li>
                    <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/contact']); ?>">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="canvas-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- Offcanvas Menu Section End -->

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="./index.html">
                                <h3 class="text-white"> Home Gym Equipment
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="<?= Yii::$app->urlManager->createUrl(['/site/index']); ?>">Home</a></li>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/information']); ?>">Information</a></li>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/wanted']); ?>">Wanted</a></li>

                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/workshop']); ?>">Workshop</a></li>

                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/gallery']); ?>">Gallery</a></li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/featured']); ?>">Featured</a></li>
                                        <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/contact']); ?>">Contact</a></li>

                                    </ul>
                                </li>

                                <li>

                                    <form action="<?php echo Url::to(['../site/search']) ?>"
                                          class="">
                                        <div class="form"> <i class="icon icon-search"></i>
                                            <input class="form-control form-input text-white-50" type="search" style="background-color: black;color:white" placeholder="Search"
                                                   name="keyword"
                                                   value="<?php echo Yii::$app->request->get('keyword') ?>">

                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
                <div class="canvas-open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <?= $content ?>
        <!-- Footer Section Begin -->
        <section class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="fs-about">
                            <div class="fa-logo">
                                <a href="<?= Yii::$app->urlManager->createUrl(['/site/index']); ?>">
                                    <h3 class="text-white">Home Gym</h3></br></br>
                                </a>
                                </br>
                                <div class="to-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    &nbsp &nbsp; <a href="#"><i class="fa fa-twitter"></i></a>
                                    &nbsp &nbsp;<a href="#"><i class="fa fa-youtube-play"></i></a>
                                    &nbsp &nbsp; <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="fs-widget">
                            <h4>Useful links</h4>
                            <ul>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/faq']); ?>">About</a></li>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/faq']); ?>">Blog</a></li>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/faq']); ?>">Classes</a></li>
                                <li><a href="<?= Yii::$app->urlManager->createUrl(['/site/contact']); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="fs-widget">
                            <h4>Support</h4>
                            <ul>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Subscribe</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="fs-widget">
                            <h4>Tips & Guides</h4>
                            <div class="fw-recent">
                                <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                                <ul>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                            </div>
                            <div class="fw-recent">
                                <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                                <ul>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section End -->

        <!-- Search model Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->endPage();
