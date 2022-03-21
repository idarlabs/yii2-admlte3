<?php
namespace idarlabs\Yii2Admlte3\assets;

use yii\web\AssetBundle;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/idarlabs/yii2-admlte3/src/plugins/select2';

    public $css = [
        'css/select2.min.css',
    ];

    public $js = [
        'js/select2.full.min.js',
        'js/formselect2.min.js'
    ];
}
