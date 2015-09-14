<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Hello Android Excercise';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <h1>Hello Android</h1>

    <p>In this lab, we will experiment with Android Studio and the Android SDK. We will
        create a simple project in which you’ll learn how to create an Android project and run a debuggable
        version of the app. </p> 
    <p>We will follow the tutorial provided <a href="http://developer.android.com/training/basics/firstapp/index.html">here</a>
    </p>

    <div class="all-sections">
        <h2 id="section-one">Important remarks</h2>
        <h3>Android package naming </h3>
        <p>
            Android follows normal java package conventions: the package name is used for unique identification for your 
            application. Android uses the package name to determine whether the application has been installed or not. The general naming is:</p>
        <p align="center"><b>com.companyname.applicationname</b></p>

        <h3>Minimum SDK </h3>
        <p>The Minimum Required SDK is the earliest version of Android that your app supports, indicated using the API level. 
            To support as many devices as possible, you should set this to the lowest version available that allows your app 
            to provide its core feature set. If any feature of your app is possible only on newer versions of Android and it's not critical 
            to the app's core feature set, you can enable the feature only when running on the versions that support it. </p>

        <div class="panel panel-success">
            <div class="panel-heading">Best practise</div>
            <div class="panel-body">Generally, it’s a good practice to support about 90% of the active devices, 
                while targeting your app to the latest version.</div>
        </div>
    </div>
</article>