<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error">

  <h1><?= Html::encode($title) ?></h1>

  <div class="alert alert-danger">
    <?= nl2br(Html::encode($message)) ?>
  </div>

  <?= Yii::t('main', 'An error occured. Please contact the administrator.') ?>

</div>
