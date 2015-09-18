<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\assets\TocAsset;

TocAsset::register($this);
$this->title = 'About this course';
$this->params['breadcrumbs'][] = $this->title;
?>


<article>
    <h1>About this course</h1>

    <p>This course is part of the curriculum of the Ghent University College. In what follows 
        we provide some information regarding this course.</p>  

    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">About the authors</h2>
                <p>
                    This course it taught by me, Dr. Jens Buysse. If you have any questions regarding
                    the lessons, you are free to contact me either during the lessons or after using
                    <a href="mailto:jens.buysse@hogent.be?Subject=[Android]">e-mail</a>. Make sure you have thouroughly thought about the question!  
                </p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">ECTS</h2>
                <p>
                    ECTS is an acronym for European Credit Transfer and Accumulation System. This stipulates every
                    final attainment level you should have when finishing this course. These can be found <a href="https://bamaflexweb.hogent.be/BMFUIDetailxOLOD.aspx?a=70748&b=5&c=1">
                        here</a>. Important are the following specifications.

                <ol>
                    <li>Building a native Android application.</li>
                    <ol>
                        <li>Can build a user interface, following the guidelines of the Android platform.</li>
                        <li>Can use the Android platform’s most important APIs. </li>
                        <li>Use the development tools, techniques and patterns that are common to the Android platform.</li>
                    </ol>
                    <li>Make an interaction with webservices</li>
                    <ol>
                        <li>Can make an interaction with de REST interface following the techniques common to the Android platform </li>
                    </ol>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <h2 id="section-three">Course material</h2>
                <p>
                    This course is taught using the following materials
                </p>
                <ol>
                    <li>This web site.</li>
                    <li>Book : <a href="http://www.amazon.com/Professional-Android-4-Application-Development/dp/1118102274"> Professional Android 4 Application Development</a>
                        - ISBN:978-1-118-10227-5</li>
                    <li> External resources, web sites, <a href="http://developer.android.com/index.html">Android Developers</a>, articles
                </ol>

                <p>
                    You will notice that some parts of the web-site are verbatims from the book. 
                </p>
            </div>
            <div class="col-sm-4"> 
                <?php
                echo Html::img('http://ecx.images-amazon.com/images/I/51Ddti0sw%2BL._SX399_BO1,204,203,200_.jpg', ['alt' => 'Profession Android',
                    'width' => '260px',
                    'height' => '324',
                    'style' => 'float: right',
                    'class' => 'img-responsive']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-four">Course organisation</h2>
                <p>
                    The lessons are organized in 12 lessons, where we will go over the theoretical aspects
                    in the first hour, where the second hour will be used to put the things learned into practice
                    during an excercie.
                    Normally you will not be able to complete the excercise in one hour so it is up to 
                    you to complete the excercise at home. If you encounter any difficulties in the excerise
                    you are welcome to ask questions in the next lesson (or via e-mail). 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">Don't forget!</div>
                    <div class="panel-body">Although some of the lessons are taught in computer classes, we will not work with these computers. It 
                        is up to you to bring your own laptop to class.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-five">Examination</h2>

                <p>
                    Both for the first as for the second exam periode, you will be examined via an oral exam. 
                    You will be handed a set of questions which you will have some time to 
                    prepare for. Some of the questions will be regarding the excercises you have made during the year, so 
                    <b> you are obliged to have made all the excercises</b>. If your question is one regarding an excercise you
                    have not made, you will receive a 0 on that question. 
                </p>
                Working together on the excercies is encouraged, but make sure that 
                <ol>
                    <li> You have programmed and written the code yourself. I will ask difficult questions and it is very difficult to answer
                        when you have not written the code yourself.
                    <li> Document your code well! Make sure you remember why you have written something the way you have.</li>
                </ol>


            </div>
        </div>
    </div>
</article>
