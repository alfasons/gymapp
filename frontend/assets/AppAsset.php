<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap',
        'https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/flaticon.css',
        'css/owl.carousel.min.css',
        'css/barfiller.css',
        'css/magnific-popup.css',
        'css/slicknav.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/bootstrap.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/masonry.pkgd.min.js',
        'js/jquery.barfiller.js',
        'js/jquery.slicknav.js',
        'js/owl.carousel.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];

}
