<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Native Apps : Android home';
$baseUrl = Yii::$app->getUrlManager()->getBaseUrl()
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Get ready to start coding android </p>
        <?= Html::img('@web/images/androidrobot.png', ['alt' => 'Android Logo']) ?>
        
    </div>
    
    

    <div class="body-content">
        
        <div class="row">
            <div class="col-lg-12">

                <p>Welcome text. </p>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <h2>Theory</h2>

                <p>A part of this site is reserved for theory lessons. It contains
                links to helpful web sites and tutorials.</p>
            </div>
            <div class="col-lg-4">
                <h2>Excercises</h2>

                <p>The excercise section explains the assignments and excercises
                for this course.</p>

                
            </div>
            <div class="col-lg-4">
                <h2>Best Practices</h2>

                <p>Android is a fragmented development framework, where standards
                are spread across the ecosystem. We will try to implement using
                the best practices at hand with supporting libraries which will ease
                the development process.</p>

                
            </div>
        </div>

    </div>
</div>
