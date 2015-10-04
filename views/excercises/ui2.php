
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Excercise User Interfaces 2';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Creating User interfaces</h1>

            <p>In this lesson we continue recreating the famous 2048 Game. 2048 is a 
                single-player puzzle game, in which the objective is to slide 
                numbered tiles on a grid to combine them and create a tile 
                with the number 2048.</p>
            <p> To play an online version, visit <a href="http://2048game.com/"> here </a></p>
            <p> Although the web is cool, we are going to make a native version!</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-one">Creating the board</h2>
                <p>We are going to create a new activity which we will call the PlayActivity. This activity
                    will be the activity holding the playing board of the Game with the numbered tiles. </p>
                <p>To do to so, we need to implement some more classes</p>
                <ol>
                    <li><b>Card</b> This is the implemenation of a tile on the board. Make this an extension
                        of a FrameLayout so it automatically becomes a View. The reason for a framelayout
                        can be found <a href="http://developer.android.com/reference/android/widget/FrameLayout.html"> here</a>. 
                        Add a TextView to the View, to show the 
                        number and a private field (int) to represent the number and the corresponding setters and 
                        getters.</li>
                    <li><b>Board</b> This is the implementation of the board. Make it an implementation of a GridLayout.
                        Create a variable Card[][] cardBoard. Create a initBoard() function which initiates the board:
                        <ol>
                            <li>Set the settings for the GridLayout (the grid is the board... )</li>
                            <li>Inialiaze the cardBoard[][] and populatie it.</li>
                        </ol>
                    <li>Create a method which adds the cards to the View. Remeber that your cards are an implementation
                        of a FrameLayout so a simple addView(c, cardWidth, cardHeight); should do the trick to see the tiles. 
                        <b>Make sure you make a correct call the the startGame method in the correct method of your Board View.</b></li>

                </ol>
                <p>By now you should be able to start this activity by pressing start Game in the opening screen. If your tiles
                    have (random) numbers you should be able to see this. A sample screenshot is given below.</p>
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

                echo Html::a(Html::img('@web/images/ui2/board.png', ['alt' => 'Playing Board',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/ui2/board.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Implementing the swipe movement</h2>
                <p> We need to detect when the user is making a Swipe Movement. Information about detecting gestures and 
                    movements can be found in the following links.             
                    Be aware that the stack overflow has several solutions which are not all as good!
                </p>
                <ol>
                    <li><a href="https://developer.android.com/training/gestures/detector.html">Android Developpers </a></li>
                    <li><a href="http://stackoverflow.com/questions/4139288/android-how-to-handle-right-to-left-swipe-gestures">StackOverFlow </a></li>
                </ol>
                <p>What will we do is creating the classes necessary for detecting the swipe movements.</p>
                <ol>
                    <li>Create a class called SwipeListener which implements a OnTochListener.</li>
                    <li>Allow the swipelistener to take advantage of the methods of the SimpleOnGestureListener</li>
                    <li>Depending on a set distance in x and y direction, call the corresponding methods up, down, left and right</li>
                    <li>Add this SwipeListener to you activity and check whether the swiping is going fine by making short
                        Toast text when a swipe has been performed. </li>
                </ol>
            </div>
            <p>One your swiping has been detected correctly, it is time to let the board react to these swipe events so make
                sure your Activity has a reference to the board object.</p>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Implementing the game logic</h2>
                <p>Create a method which randomly add some numbers to the board. You could also,
                    for testing puposes, create a test method which sets the board the way you want it. </p>
                <p>
                    Now it is time to implement the Game Logic. When swiping is performed
                    the corresponding action shoul be performed. Create 4 methods (up, down, left, right) in your board
                    class which will implement the corresponding functionality. There are two ways to implement this</p>
                <ol>
                    <li>Implement the 4 movements as they are.</li>
                    <li>Create one movement. For the other movenemts you perform a set of rotations and 
                        call the implemented movement on the rotated board.</li>
                </ol>
                <p>
                    It is a good idea to think about these options and to decide which
                    one suits your needs. 
                </p>
                <p>Some information on the algorithm can be found <a href="https://www.leaseweb.com/labs/2014/03/text-mode-2048-game-c-algorithm-explained/">
                        here</a>, although this is a C implementation.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Tying it all together</h2>
                <p>Once the core funcionality has been implemented, there are still
                a few more things to do</p>
                <ul>
                    <li>Add a score label and allow the player to score points</li>
                    <li>Allow the game to be continued instead of each time a new game</li>
                    <li>Reset the game</li>
                </ul>
                <p>
                    Optionally (not for the exam) you could add some settings to the game. If you have 
                    implemented these you will receive better points on the exam (provided you
                    implemented the excercise correctly). 
                <ul>
                    <li>Set a difficulty level</li>
                    <li>Add some difficult starting positions</li>
                    <li>...</li>
                </ul>
                </p>
            </div>
        </div>
    </div>


</article>