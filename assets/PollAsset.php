<?php

namespace app\assets;

use yii\web\AssetBundle;

class PollAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/poll.css'
    ];
    public $js = [
        'js/poll.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
