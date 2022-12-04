<?php

namespace app\assets;

use yii\web\AssetBundle;

class PollAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
//        'https://unpkg.com/@mojs/core',
//        'https://cdn.jsdelivr.net/npm/@mojs/core'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
