
<?php

use app\assets\TocAsset;
use yii\helpers\Html;
use yii\helpers\Url;

TocAsset::register($this);
$this->title = 'Excercies on Applications and Activities';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Creating Applications and Activities</h1>

            <p>In this lesson we will build our first working app, using activities, intents and some basic
                User Interface design.</p>  
            <p>Create a GitHub repository using 
                <?php echo Html::a('this link', Url::to('https://classroom.github.com/assignment-invitations/1ba7b406f11fb35d202db0bb6afcdd10', true), ['class' => 'btn btn-primary']) ?>
                to create this project (Skeleton code will be provided):</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-one">Excercise 1</h2>
                <p>In this excercise you have to create an Activity and we are going
                    to count how many times each trigger from the Activity will be
                    called with some user interactions. In order to do this you should:</p>
                <ol>
                    <li> Create a new activiy with all necessary triggers (all of them)</li>
                    <li> Log each lifecycle method using Log.i() method.</li>
                    <li> Use a counter variable for each life cycle method which is incremented with
                        each call of the life cylce method. The user interface
                        should be able to show this counter.</li>
                </ol>
                <p>Do this for the first activity. You can use the following references to start building your app</p>

                <ul>
                    <li><a href="http://developer.android.com/training/basics/activity-lifecycle/index.html">http://developer.android.com/training/basics/activity-lifecycle/index.html</a>
                    <li><a href="http://developer.android.com/reference/android/app/Activity.html#onSaveInstanceState%28android.os.Bundle%29">http://developer.android.com/reference/android/app/Activity.html#onSaveInstanceState%28android.os.Bundle%29</a>
                    <li><a href="http://developer.android.com/reference/android/app/Activity.html">http://developer.android.com/reference/android/app/Activity.html</a>
                </ul>
            </div>
            <div class="col-sm-2">
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

                echo Html::a(Html::img('@web/images/activities/activity1.png', ['alt' => 'Android life cycle',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/activities/activity1.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-two">Excercise 2</h2>
                <p>Now it is time to create a second activity, witht the same functionality as the former
                    activity you have made. We are going to allow the first Activity to start the second activity.
                    When you close the second activity, you should see the first activity again. You should:</p>
                <ol>
                    <li> Add buttons to both activities (to start the second activity) and one to close the second activity</li>
                    <li> Implement the method which starts the second activity when the button has been pressed.</li>
                    <li> Implement the method which stops the second activity and allow to return to the first activity. </li>
                </ol>
                <p>Do this for the first activity. You can use the following references to continue building your app</p>

                <ul>
                    <li><a href="http://developer.android.com/training/basics/firstapp/starting-activity.html">http://developer.android.com/training/basics/firstapp/starting-activity.html</a>
                </ul>
            </div>
            <div class="col-sm-2">
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

                echo Html::a(Html::img('@web/images/activities/activity1.png', ['alt' => 'Android life cycle',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/activities/activity2.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Testing</h2>
                <p> The first Android SDK testing solution we will examine is the JUnit test framework.
                    This is a standard Java unit testing framework. Originally, Android itself “baked in” a
                    copy of JUnit3. This has since been deprecated, and modern Android testing is done
                    with a separate copy of JUnit4, in the form of a AndroidJUnitRunner class.</p>
                <p>There are two places in Android app development where we use JUnit4:
                    instrumentation tests and unit tests. Both serve the same objective: confirm that our
                    code runs as expected. What differs in where the code lives (androidTest versus
                    test sourcesets) and where the code runs (inside of Android or on your
                    development machine directly).</p>
                <p>In JUnit terminology, “test case” is a Java class that represents a set of tests to run.
                    Any Java class can serve as a test case, so long as it has a zero-argument public
                    constructor and is known to the test runner that it contains tests to be run. In the
                    case of JUnit4 on Android, that comes via a @RunWith(AndroidJUnit4.class)
                    annotation on the class, to signal that this class contains tests. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <pre class="prettyprint lang-java">
@RunWith(AndroidJUnit4.class)
    public class ICanHazTests {
   
    @Test
    public void kThxBye() {
    // do some testing
    }

    @Test
    public void thisIsReallySilly() {
        Assert.assertEquals("bit got flipped by cosmic rays", 1, 1);
    }
}
                </pre>
            </div>
            <p>
                A JUnit test case can also have methods that represent “setup” and “teardown” work.
                A “setup” method is one that executes before test methods and helps establish a
                common environment to be used by all of the test methods. A “teardown” method is
                one that is run after test methods and is used to clean up things created by the
                “setup” method. The objective is to ensure that each test method has a consistent
                and expected environment (e.g., contents of databases).
                In JUnit4, you can annotate methods with @Before and @After for per-test-method
                setup and teardown work. The @Before method will be invoked before each test
                method is called; the @After method will be invoked after each test method is
                called.
                JUnit4 also offers static @BeforeClass and @AfterClass methods, which are invoked
                once for the entire test case, designed for setting up immutable starter data for test
                methods and avoiding the overhead of doing that work on each test method
                invocation.
            </p>
            <p>
                For more information, check out this <?php echo Html::a('site', 'https://developer.android.com/training/testing/unit-testing/local-unit-tests.html'); ?>
            </p>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-10">
            <h2 id="section-four">Write the tests</h2>
            <p>Generate some tests for your application to see 
                if basic testing is possible (not with activities).
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-10">
            <h2 id="section-five">Espresso</h2>
            <p>Basic JUnit4 instrumentation tests are fine for testing non-UI logic. They even work
                acceptably for some basic UI testing. The more complex your UI testing gets,
                though, the more likely it is that you will find plain JUnit4 instrumentation tests to
                be limiting and tedious.
            </p>
            <p>
                Espresso is designed to simplify otherwise-complex UI testing scenarios, such as:
            </p>
            <ul>
                <li>Testing across activities, such as confirming that tapping a ListView row in
                    one activity correctly launches a detail activity associated with the model
                    object for that row </li>
                <li>Testing over time, such as waiting for a list to be populated from a database
                    before actually testing it</li>
            </ul>      
            <p>Writing Espresso tests is often described as having three main steps:</p>
            <ul>
                
                <li>Find the widgets you want to examine or manipulate</li>
                <li>Perform actions on those widgets where needed (and where possible)</li>
                <li>Check to see if widgets have a certain state</li>
            </ul>
      


            <h2 id="section-six">Espresso tests</h2>
            <p>Look <?php echo Html::a('here', 'http://www.vogella.com/tutorials/AndroidTestingEspresso/article.html') ?>
                on how to work with Espresso and write some basic tests for your application. This should contain at minimum:</p>
            <ol>
                <li>A test to see whether pressing a button opens the new Activity correctly</li>
                <li>A test to check one of the parameters you are testing (e.g. onStart() method)</li>
                    
            </ol>

        </div>
    </div>



</article>