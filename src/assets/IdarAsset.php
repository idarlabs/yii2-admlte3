<?php
namespace idarlabs\Yii2Admlte3\assets;

use yii\web\AssetBundle;

class IdarAsset extends AssetBundle
{
    public $sourcePath = '@vendor/idarlabs/yii2-admlte3/src';

    public $css = [
      'dist/style.css'
    ];

    public $js = [
      ['idarjs/jquery-1.11.3.min.js', 'position' => 1],
      ['idarjs/idar.js', 'position' => 1]
    ];
}
