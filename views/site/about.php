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
                    the lessons, you are free to contact me either during the lessons. If you still need more help you can contact me on
                    the Chamilo forum. Make sure you have thouroughly thought about the question!  
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
                    <li>Partial competence: Building a native Android application.</li>
                    <ol>
                        <li>Can build a user interface, following the guidelines of the Android platform.</li>
                        <li>Can use the Android platform’s most important APIs.</li>
                        <li>Use the development tools, techniques and patterns that are common to the Android platform.</li>
                    </ol>

                    <li>Partial competence : Make an interaction with webservices.</li>
                    <ol>
                        <li>Can make an interaction with de REST interface following the techniques common to the Android platform</li>
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
                    <li>Book : <a href="https://wares.commonsware.com/app/books">The Busy Coder's Guide to Android Development </a>- ISBN: 978-0-9816780-0-9</a></li>
                    <li> External resources, web sites, <a href="http://developer.android.com/index.html">Android Developers</a>, articles ...</li>
                </ol>

                <p>
                    You will notice that some parts of the web-site are verbatims from the books. 
                </p>
            </div>
            <div class="col-sm-4"> 
                <div class="col-sm-6">
                    <?php
                    echo Html::img('http://ecx.images-amazon.com/images/I/51Ddti0sw%2BL._SX399_BO1,204,203,200_.jpg', ['alt' => 'Profession Android',
                        'width' => '260px',
                        'height' => '324',
                        'style' => 'float: right',
                        'class' => 'img-responsive']);
                    ?>
                </div>
                <div class="col-sm-6">
                    <?php
                    echo Html::img('https://images-na.ssl-images-amazon.com/images/I/515B4rm-BlL.jpg', ['alt' => 'The Busy Coder\'s Guide to Android Development',
                        'width' => '260px',
                        'height' => '324',
                        'style' => 'float: right',
                        'class' => 'img-responsive']);
                    ?>
                </div>
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
                <h2 id="section-five">Prior knowledge</h2>
                <p>
                    This course assumes that you know Java at this point. If you do not, you will need to
                    learn Java before you go much further. You do not need to know everything about
                    Java, as Java is vast. Rather, focus on:
                <ul>
                    <li>Language fundamentals (flow control, etc.)</li>
                    <li>Classes and objects</li>
                    <li>Methods and data members</li>
                    <li>Public, private, and protected</li>
                    <li>Static and instance scope</li>
                    <li>Exceptions</li>
                    <li>Threads</li>
                    <li>Collections</li>
                    <li>Generics</li>
                    <li>File I/O</li>
                    <li>Reflection</li>
                    <li>Interfaces</li>
                </ul>
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
                <h2 id="section-six">Examination</h2>

                <p>
                    Both for the first as for the second exam period, you will be examined via an oral exam. 
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
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <?php
                    echo Html::img('http://www.reactiongifs.com/r/2013/09/work.gif', ['alt' => 'Work hard, play hard',
                        'width' => '260px',
                        'height' => '324',
                        'style' => 'float: center',
                        'class' => 'img-responsive']);
                    ?>
                </div>
            </div>


            <div class="col-sm-6">
                <div>

                    <?php
                    echo newerton\fancybox\FancyBox::widget([
                        'target' => 'a[rel=fancybox]',
                        'helpers' => true,
                        'mouse' => true,
                        'config' => [
                            'maxWidth' => '90%',
                            'maxHeight' => '90%',
                            'playSpeed' => 7000,
                            'padding' => 0,
                            'fitToView' => false,
                            'width' => '70%',
                            'height' => '70%',
                            'autoSize' => false,
                            'closeClick' => false,
                            'openEffect' => 'elastic',
                            'closeEffect' => 'elastic',
                            'prevEffect' => 'elastic',
                            'nextEffect' => 'elastic',
                            'closeBtn' => false,
                            'openOpacity' => true,
                            'helpers' => [
                                'title' => ['type' => 'float'],
                                'buttons' => [],
                                'thumbs' => ['width' => 68, 'height' => 50],
                                'overlay' => [
                                    'locked' => false,
                                    'css' => [
                                        'background' => 'rgba(0, 0, 0, 0.8)'
                                    ]
                                ]
                            ],
                        ]
                    ]);

                    echo Html::a(Html::img('@web/images/punten2052016.jpg', ['alt' => 'Punten 2015 2016', 'width' => '100%', 'class' => "img-responsive"]), '@web/images/punten2052016.jpg', ['rel' => 'fancybox']);
                    ?>



                </div>
            </div>
        </div>
    </div>
</article>
