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
        <h3>Target SDK</h3>
        <p>The Target SDK, roughly speaking, is the version of Android you were thinking of
            when you were writing the code for this app. Usually, you will set this to be the latest
            shipping Android API level, then change it over time as new versions of Android are
            released and you decide that you are ready for some of those changes.</p>
        <h3>Compile with or build SDK or compileSDKVersion</h3>
        <p>The Compile With (a.k.a., build SDK or compileSdkVersion) is the version of
            Android whose classes and methods you want to compile against. This can be newer
            than the minimum required SDK, and it often is newer. On newer devices running
            newer versions of Android, you might want to take advantage of some new features,
            and you will “route around” that code on older devices to maintain backwards
            compatibility. Hence, typically, your build SDK is set to a fairly new version of
            Android, certainly one new enough to support all of the classes and methods from
            the Android SDK that you want to use. Note that to set this to API Level 21 or higher,
            you will need to be using Java 7 or higher for your Java compiler.</p>
        <h3>Theme</h3>
        <p>The “Theme” is a general statement of the look and feel of your app, particularly in
            terms of color scheme. The current default (“Holo Light with Dark Action Bar”)
            means that the body of your UI will be dark text on a light background, except for
            the “action bar” across the top, which will be light text on a dark background</p>
    </div>
</article>