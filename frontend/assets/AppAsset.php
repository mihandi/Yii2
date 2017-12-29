<?php
namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        "css/style.min.css",
        "stylesheets/bootstrap.css",
        "stylesheets/style.css",
        "stylesheets/responsive.css",
        "stylesheets/colors/color1.css",
        "stylesheets/animate.css"

    ];
    public $js = [
//        "javascript/jquery.min.js",
//    "http://code.jquery.com/jquery-1.9.1.js",

        "javascript/bootstrap.min.js",
        "javascript/jquery.easing.js",
        "javascript/jquery-waypoints.js",
        "javascript/jquery-countTo.js",
        "javascript/jquery-ui.js",
        "javascript/imagesloaded.min.js",
        "javascript/jquery.isotope.min.js",
        "javascript/jquery.cookie.js",
        "javascript/headline.js",
        "javascript/owl.carousel.js",
        "javascript/parallax.js",
        "javascript/jquery.magnific-popup.min.js",
        "javascript/main.js",
        "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js",
        "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}