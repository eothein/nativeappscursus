<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Excercise User Interfaces 1';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Intents</h1>
            <h2>First Excercise: speech to text</h2>
            <p> In this excercise we are going to create an application which is able to
                convert speech into text. </p>
            <ul>
                <li>Create a project, with one activty.</li>
                <li>This activity contains one button, which will create an <a href="http://developer.android.com/reference/android/speech/RecognizerIntent.html">
                        special intent</a> launching an acitivty which is able to listent to speech, convert it to text
                    and return its results. </li>
                <li>Apply the best practices learned in theory.</li>
                <li>Make sure your application is able to handle the return result.</li>
                <li>Process the result anyway you want, but make sure we are able to results in a nice way.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2>Second Excercise: choices</h2>
            <p> In this excercise we are going to create an application which provides
            the user with a list of actions which he is able to perform. The choices
            are the following:</p>
            <ul>
                <li>Open a web-site with a given url</li>
                <li>Open the contacts</li>
                <li>Open the dialer</li>
                <li>Search google</li>
                <li>Start a voice command</li>
            </ul>
        </div>
    </div>
</article>
