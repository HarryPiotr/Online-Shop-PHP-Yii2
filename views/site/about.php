<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row mt-3 mb-3">
        <div class="col-12">
            <h4>I've created this app!</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="d-flex flex-row">
                <figure>
                    <img src="/imgs/m305904.jpg" alt="m305904"/>
                </figure>
            </div>
            <div class="d-flex flex-row">
                <h5>Piotr Anuskiewicz</h5>
            </div>
            <div class="d-flex flex-row">
                <p>m305904</p>
            </div>
        </div>
    </div>
</div>
