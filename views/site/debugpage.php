<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'DebugPage';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-debug">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= $debuginfo ?></p>
</div>
