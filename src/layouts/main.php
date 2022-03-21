<?php
use yii\bootstrap4\Html;
use idarlabs\Yii2Admlte3\assets\AdmLteAsset as admlte;

admlte::register($this);
\idarlabs\Yii2Admlte3\assets\FontAwesomeAsset::register($this);
\idarlabs\Yii2Admlte3\assets\Select2Asset::register($this);
\idarlabs\Yii2Admlte3\assets\IdarAsset::register($this);

$this->registerCssFile('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>var base = "<?=\yii\helpers\Url::base(true);?>";</script>
  </head>
  <body class="hold-transition sidebar-mini">
    <?php $this->beginBody(); ?>
    <?php if(isset($this->params['kosong'])){ ?>
    <div class="wrapper kosong"><?=$content;?></div>
    <?php }else{ ?>
    <div class="wrapper">
      <?php
        echo $this->render('navbar', admlte::idarAsset());
        echo $this->render('sidebar', admlte::idarAsset());
        admlte::idarAlert();
        echo $this->render('content', admlte::idarAsset($content));
        echo $this->render('control-sidebar');
        echo $this->render('footer');
      ?>
    </div>
    <?php } $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
