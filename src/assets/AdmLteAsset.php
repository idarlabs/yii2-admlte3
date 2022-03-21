<?php
namespace idarlabs\Yii2Admlte3\assets;

use yii\web\AssetBundle;
use idarlabs\Yii2Admlte3\widgets\Alert;

class AdmLteAsset extends AssetBundle{

  public $sourcePath = '@vendor/idarlabs/yii2-admlte3/src/dist';

  public $css = [
    'css/adminlte.min.css'
  ];

  public $js = [
    'js/adminlte.min.js'
  ];

  public $depends = [
    'idarlabs\Yii2Admlte3\assets\BaseAsset',
    'idarlabs\Yii2Admlte3\assets\PluginAsset'
  ];

  public static function idarAsset($isi = null){
    $admlte = \Yii::$app->assetManager;
    $komponen = '@vendor/idarlabs/yii2-admlte3/src/dist';
    $dir = $admlte->getPublishedUrl($komponen);

    $aset = ['assetDir' => $dir];

    if($isi !== null){
      $aset['content'] = $isi;
    }
    return $aset;
  }

  public static function idarAlert(){
    if (\Yii::$app->session->hasFlash('success')){
      echo Alert::widget(['type' => 'info', 'body' => \Yii::$app->session->getFlash('success')]);
    }else if (\Yii::$app->session->hasFlash('error')){
      echo Alert::widget(['type' => 'danger', 'body' => \Yii::$app->session->getFlash('error')]);
    }
  }
}
