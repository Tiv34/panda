<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class IndexApp extends AssetBundle
{
    public $jsOptions = ['position' => View::POS_BEGIN];
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/wish-list.css',
        'css/popup.css',
    ];
    public $js = [
        'js/scroll.js',
        'js/popup.js',
        'js/wish-list.js',
    ];
    public $depends = [];
}