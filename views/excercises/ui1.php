
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
            <h1>Creating User interfaces</h1>

            <p>In this lesson we will recreate the famous 2048 Game. 2048 is a 
                single-player puzzle game, in which the objective is to slide 
                numbered tiles on a grid to combine them and create a tile 
                with the number 2048.</p>
            <p> To play an online version, visit <a href="http://2048game.com/"> here </a></p>
            <p> Although the web is cool, we are going to make a native version!</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-8">
                <h2 id="section-one">Excercise 1 : starting the project</h2>
                In this excercise we will create a welcome screen for the application. This should contain 
                4 buttons (as shown in the drawing).
                <ul>
                    <li>Contine : continues current game</li>
                    <li>New Game : start a new game</li>
                    <li>About: gives use some background on the game</li>
                    <li>Exit : exits the game</li>
                </ul>
                To do this, create a new project and call it oefening1. Follow the next steps:
                <ol>
                    <li>Create an Activity and call it Welcome</li>
                    <li>Create the required strings in the string.xml file (the options) </li>
                    <li>Use a linear layout and add the required buttons. Make sure the correct text is 
                        displayed from strings.xml Provide appropriate names for the id's. </li>
                    <li>Use padding to make the buttons more appealing.</li>
                </ol>
                <p>Now try it on your computer or emulator. What happens? Is everything still visible?</p>
                <p>You can have two versions of every layout. The trick is creating a new directory 
                    under your /res folder titled: layout-land (you can do this with a right click).
                    Any xml files found in the layout-land 
                    folder will be used when the activity restarts and determines the phone to be in landscape orientation.</p>
                <h2 id="section-two">Excercise 2: add layouts for landscope mode</h2>
                <p> Create an alternate layout resource file and use a table layout for 
                    the buttons. To find more information on tablelayout, click <a href="https://developer.android.com/guide/topics/ui/layout/grid.html">here</a></p>

            </div>
            <div class='col-sm-4'>
                <h3>What Are Dips and Sps?</h3>
                <p>Historically, programmers always designed computer interfaces
                    in terms of pixels. For example, youmight make a field 300 pixels
                    wide, allow 5 pixels of spacing between columns, and define
                    icons 16-by-16 pixels in size. The problem is that if you run that
                    program on new displays with more and more dots per inch
                    (dpi), the user interface appears smaller and smaller. At some
                    point, it becomes too hard to read.
                    Resolution-independentmeasurements help solve this problem.
                    Android supports all the following units:</p>
                <ul>
                    <li>px (pixels): Dots on the screen.</li>
                    <li> in (inches): Size as measured by a ruler.</li>
                    <li>mm (millimeters): Size as measured by a ruler.</li>
                    <li> pt (points): 1/72 of an inch.</li>
                    <li>dp (density-independent pixels): An abstract unit based
                        on the density of the screen. On a display with 160 dots
                        per inch, 1dp = 1px.</li>
                    <li> dip: Synonymfor dp, usedmore often in Google examples.</li>
                    <li> sp (scale-independent pixels): Similar to dp but also scaled
                        by the user’s font size preference.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-3'>
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

                echo Html::a(Html::img('@web/images/ui1/screen1.jpg', ['alt' => 'Interface portrait',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/ui1/screen1.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
            <div class='col-sm-5'>
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

                echo Html::a(Html::img('@web/images/ui1/screen2.jpg', ['alt' => 'Interface landscape',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/ui1/screen2.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class='col-sm-10'>
                <h2 id="section-three">Excercise 3 : the about button</h2>
                <p>When the user selects the About button we want
                    to pop up a window with some information about 2048. After scrolling through the text, 
                    the user can press the Back button to dismiss the window. To accomplish this we are going
                    to create an AlerDialog. For more information click <a href="http://developer.android.com/guide/topics/ui/dialogs.html"> here</a> </p>
                <ol>
                    <li>In the Welcome Activity create a private variable for the about button. </li>
                    <li>In the onCreate method add the code to retrieve the button for the variable. </li>
                    <li>In the onCreate method add an OnClickListener to the button which wil generate and show the AlertDialog.</li>
                    <li>Add in string.xml the text you want to show for the about button (any text you want). </li>
                </ol>
                Test your application by pressing the about button. What happens when there is more text
                than the screen can show?
            </div>
            <div class='col-sm-2'>
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

                echo Html::a(Html::img('@web/images/ui1/about.png', ['alt' => 'The about dialog box',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/ui1/about.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-12'>
                <h2 id="section-four">Excercise 4: use Butterknife</h2>
                <p>There are many third-party libraries for Android but several of them are so powerful 
                    we are already going to use them in the early stages of this course. </p>
                <p>The first library we are going to use is <a href='http://jakewharton.github.io/butterknife/'>ButterKnife</a>. It has a multitude of purposes
                    but the one we are going to use is eliminating the  findViewById calls by using @Bind on fields.</p>
                <ol>
                    <li>First we need to add ButterKnife as a dependency to our project.</li>
                    <li>Goto File -> Project -> App and to tab Dependencies</li>
                    <li>Press + with Library Dependency</li>
                    <li>Look for Butterknife</li>
                    <li>Add com.jakewharton:butterknife:7.0.1 as your dependency</li>
                </ol>
                In build.gradle (module app) you should find 
                <pre class="prettyprint">
dependencies {
    compile fileTree(include: ['*.jar'], dir: 'libs')
    compile 'com.jakewharton:butterknife:7.0.1'
}
                </pre>
                <h3>Use Butterknife</h3>
                <p>Annotate fields with @Bind and a view ID for Butter Knife to find and automatically cast 
                    the corresponding view in your layout. Don't forget ButterKnife.bind(this); in the onCreate method.</p>
                <p>Create a separate method and bind the onClick event to that methode. No need for private inner class.</p>
            </div>
        </div>

        <div class="row">
            <div class='col-sm-10'>
                <h2 id="section-five">Excercise 5: Adjust the action bar</h2>
                <p>We are going to adjust the action bar by adding a button which 
                    restarts the current game. Click <a href="http://developer.android.com/training/basics/actionbar/adding-buttons.html">here</a> if you forgot how to 
                    add elements to the action bar. The action for the restart button is for later. </p>
            </div>
            <div class='col-sm-12'>

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

                echo Html::a(Html::img('@web/images/ui1/withaction.png', ['alt' => 'With action bar',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/ui1/withaction.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class='col-sm-10'>
                <h2>Exiting the Game</h2>
                <p>The user can just press the Back key or the Home key to do something else. Althought this is possible
                ware are going to add this functionality to the exit button in the home screen. Use butterknife and
                be amazed by its power! No need for case and switch statements for instance.</p>
            </div>
        </div>
    </div>


</article>