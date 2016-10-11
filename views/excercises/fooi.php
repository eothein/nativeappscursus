
<?php

use app\assets\TocAsset;
use yii\helpers\Html;
use yii\helpers\Url;

TocAsset::register($this);
$this->title = 'Excercise User Interfaces 1: Tip Calculator';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Creating User interfaces</h1>

            <p>In this excercise calculates and siplays tops for 
                a restaurant bill. As a user enters a bill total
                the app calculates and sidplays the tip amount and
                total bill for three common tipping percentages (10, 15 and 20
                percent). The user can also specify a custom tip percentage
                by moving a slides which updates the percentage shown to the
                right of the slider.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-8">
                <h2 id="section-one">Excercise 1 : starting the project</h2>
                <p> Create a project and add it to your repository in GitHub classroom
                    using  
                    <?php echo Html::a('this link', Url::to('https://classroom.github.com/assignment-invitations/e0dc8d8aefaa1279a66005ccd8f99501', true), ['class' => 'btn btn-primary']) ?>
                </p>
                <h2 id="section-two">Excercise 2 : create the UI</h2>
                <p> The user interface is built using a 
                    <?php echo Html::a('Coördinatorlayout', 'https://developer.android.com/reference/android/support/design/widget/CoordinatorLayout.html'); ?>
                    You should be able to swipe down and show an image, while the contents of your 
                    application go down. To see an example of how this is done, click
                     <?php echo Html::a('here', Url::to('http://saulmm.github.io/mastering-coordinator', true), ['class' => 'btn btn-primary']) ?>
                </p>
                <p>
                    Make sure that the application has the required elements as shown
                    as above. The user should be able to :
                    
                </p>
                <ul>
                    <li>Enter a bill total</li>
                    <li>Select a custom tip percentage (using a 
                    <?php echo Html::a('seekbar', 'https://developer.android.com/reference/android/widget/SeekBar.html'); ?>
                    )</li>
                    
                </ul>
                The application shoul show automaticaly
                <ul>
                    <li>The required percentages (10, 15, 20)</li>
                    <li>The total amount of money to be paid depending on the percentages</li>
                    <li>The same for the custom tip (with seekbar)</li>
                </ul>
                <p>You can choose yourself how the user interface looks, but 
                make sure that it is user-friendly (e.g. use an EditText which
                only accepts floating point numbers). You can e.g. use a 
                 <?php echo Html::a('TableLayout', 'https://developer.android.com/reference/android/widget/TableLayout.html'); ?>
                </p>
                
            </div>
            <div class='col-sm-4'>
                <h3>What Are Dips and Sps?</h3>
                <p>Historically, programmers always designed computer interfaces
                    in terms of pixels. For example, you might make a field 300 pixels
                    wide, allow 5 pixels of spacing between columns, and define
                    icons 16-by-16 pixels in size. The problem is that if you run that
                    program on new displays with more and more dots per inch
                    (dpi), the user interface appears smaller and smaller. At some
                    point, it becomes too hard to read.
                    Resolution-independentmeasurements help solve this problem.
                    Android supports all the following units:</p>
                <ul>
                    <li>px (pixels): Dots on the screen.</li>
                    <li>in (inches): Size as measured by a ruler.</li>
                    <li>mm (millimeters): Size as measured by a ruler.</li>
                    <li>pt (points): 1/72 of an inch.</li>
                    <li>dp (density-independent pixels): An abstract unit based
                        on the density of the screen. On a display with 160 dots
                        per inch, 1dp = 1px.</li>
                    <li> dip: Synonymfor dp, usedmore often in Google examples.</li>
                    <li> sp (scale-independent pixels): Similar to dp but also scaled
                        by the user’s font size preference.</li>
                </ul>
            </div>
        </div>
    </div>
    
     <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Excercise 3 : butterknife</h2>
                <p>When writing down the logic of the applications, 
                you can make use of 
                 <?php echo Html::a('Butterknife', 'http://jakewharton.github.io/butterknife/'); ?>
                which will increase your development time. Make sure you 
                annotate fields with @BindView and a view ID for Butter Knife 
                to find and automatically cast the corresponding view in your layout.
                </p>
                <p>
                    When starting the application (onCreate) make sure whether
                    you check if the app just started running. If so, initialize
                    the variables correctly. If not, make sure that the state you
                    have saved is loaded correctly. Futhermore, make sure you
                    save your state (for e.g. configuration changes)
                </p>
                <h2 id="section-four">Excercise 4 : percentage logic</h2>
                <p>
                    Create a class which is able to calculate a percentge
                    given the bill and a percentage number. You probably need
                    a wrapper class as you will need the tip amount and the total
                    amount. Make a test in using JUnit to test your business logic.
                </p>
                <p>
                    Create two methods which make use of those Classes: one
                    which updates the standard texts each time the user changes the 
                    bill total, one which updates the custom tip and total EditTexts
                    based on the tip percentage the user selected using the 
                    seekbar. 
                </p>
                <h2 id="section-five">Excercise 3 : create the onSeekBarChangeListener</h2>
                <p>
                    Create an anonymous inner-class customSeekBarListener
                    that listens to to customSeeksBar's events and create a 
                    TextWatcher which listens to changes in the Bill textview. 
                    And of course, add those listeners to the widgets. 
                </p>
            </div>
     </div>


</article>