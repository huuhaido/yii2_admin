<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all',
        'css/site.css',
        /*<!-- Global styles START -->*/
        'css/global/plugins/font-awesome/css/font-awesome.min.css',
        'css/global/plugins/bootstrap/css/bootstrap.min.css',
        /*<!-- Global styles END -->*/
        /*<!-- Page level plugin styles START -->*/
        'css/global/plugins/fancybox/source/jquery.fancybox.css',
        'css/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css',
        'css/global/plugins/uniform/css/uniform.default.css',
        'css/jquery-ui.css',
        'css/global/plugins/rateit/src/rateit.css',
        /*<!-- Page level plugin styles END -->*/

        /*<!-- Theme styles START -->*/
        'css/global/css/components.css',
        'css/frontend/layout/css/style.css',
        'css/frontend/pages/css/style-shop.css',
        'css/frontend/layout/css/style-responsive.css',
        'css/frontend/layout/css/themes/red.css',
        'css/frontend/layout/css/custom.css',
        /*<!-- Theme styles END -->*/
    ];
    public $js = [
        'js/global/plugins/jquery.min.js',
        'js/global/plugins/jquery-migrate.min.js',
        'js/global/plugins/bootstrap/js/bootstrap.min.js',
        'js/frontend/layout/scripts/back-to-top.js',
        'js/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        /*<!-- END CORE PLUGINS -->*/

        /*<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->*/
        'js/global/plugins/fancybox/source/jquery.fancybox.pack.js',
        'js/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js',
        'js/global/plugins/zoom/jquery.zoom.min.js',
        'js/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js',
        'js/global/plugins/uniform/jquery.uniform.min.js',
        'js/global/plugins/rateit/src/jquery.rateit.js',
        'js/jquery-ui.js',

        'js/frontend/layout/scripts/layout.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
