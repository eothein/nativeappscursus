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

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
            </div>
            <div class="col-lg-4">
                <h2>Excercises</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                
            </div>
            <div class="col-lg-4">
                <h2>Best Practices</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                
            </div>
        </div>

    </div>
</div>
