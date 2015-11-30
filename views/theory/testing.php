<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Services and networks and ...';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Testing in Android & GreenDAO</h1>
            In this class, we will covering the basic testing techniques
            available in Android. We will continue by looking into 
            a usefull library, GreenDAO, which will simplify working
            with databased in Android. 
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-6">
                <h2 id="section-one">Unit Testing in Android</h2>
                <p>
                    Android supports basic unit testing: for any function and 
                    given a set of inputs, we can determine if the part of the application 
                    is returning the proper values and will gracefully handle 
                    failures during the course of execution should invalid 
                    input be provided. The basic components are the following. 
                </p>
                <ul>
                    <li>
                        You can use the JUnit <b>TestCase</b> class to do unit 
                        testing on a class that doesn't call Android APIs. TestCase is also the 
                        base class for AndroidTestCase, which you can use to test 
                        Android-dependent objects. Besides providing the JUnit 
                        framework, AndroidTestCase offers Android-specific setup, 
                        teardown, and helper methods
                    </li>
                    <li>
                        Android's build and test tools assume that test projects are 
                        organized into a standard structure of tests, test case classes, test packages, and test projects.
                        the best approach is to add the test project so that its root directory 
                        tests/ is at the same level as the src/ directory of the main application's 
                        project. This helps you find the tests associated with an application.
                    </li>

                    <li>
                        You make use of an Instrumentation that runs various types of 
                        TestCases against an Android package (application). 
                    </li>
                    <li>
                        You can use assertion methods to display the results of tests. 
                        An assertion method compares an actual value returned by a 
                        test to an expected value, and throws an AssertionException 
                        if the comparison test fails.
                    </li>
                    <li>
                        To facilitate dependency injection in testing, Android provides 
                        classes that create mock system objects such as Context objects, 
                        ContentProvider objects, ContentResolver objects, and Service objects. 
                        Some test cases also provide mock Intent objects. You use these mocks 
                        both to isolate tests from the rest of the system and to facilitate
                        dependency injection for testing. These classes are found in the 
                        packages android.test and android.test.mock. 
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
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

                echo Html::a(Html::img('@web/images/testing/overview.png', ['alt' => 'Playing Board',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/testing/overview.png', ['rel' => 'fancybox']);
                ?>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 id="section-two">Testing Tutorial</h2>
                    A nice tutorial on how to test a basic activity can be found 
                    <a href="http://developer.android.com/training/testing.html">here</a>.
                    Some hints and tips.
                    <ul>
                        <li><a href="http://developer.android.com/reference/android/test/ActivityInstrumentationTestCase2.html">ActivityInstrumentationTestCase2</a> :
                            This class provides functional testing of a single activity. 
                            The activity under test will be created using the system infrastructure 
                            (by calling InstrumentationTestCase.launchActivity()) and 
                            you will then be able to manipulate your Activity directly.  </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 id="section-two">Roboelectric</h2>
                    <p>Robolectric is a framework that allows you to write unit 
                        tests and run them on a desktop JVM while still using 
                        Android API. Robolectric mocks part of the Android 
                        framework contained in the android.jar file. This 
                        is similar to the unit test support via the Android 
                        Gradle plug-in but Robolectric provides also implementations
                        for the methods while the Android unit testing support 
                        throws exceptions in all in android.jar methods which
                        are used for unit testing. </p>
                    <h3>Setting up Roboelectric</h3>
                    <p>The following site explains how to setup the development
                        environment to work with RoboElectric: <a href="https://github.com/codepath/android_guides/wiki/Unit-Testing-with-Robolectric">
                            Setup.</a></p>
                    <p>Warning for windows users: when your account containts a space,
                        it is likely you will get Exceptions. The problem is discussed
                        <a href="https://github.com/robolectric/robolectric/issues/1363">here</a> and although they
                        claim to have a solution, the problem still exist. So you will have to find 
                        a workaround for you that works within your development 
                        framework (and computer).

                    </p>
                    
                </div>
            </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">GreenDAO</h2>
                <p> <a href="http://greendao-orm.com/">greenDAO</a> is an open source project to help Android developers
                    working with data stored in SQLite. SQLite is an awesome embedded relational database,
                    however, developing for it requires alot of additional work. 
                    Writing SQL and parsing query results are quite tedious tasks. 
                    greenDAO will do the work for you: it maps Java objects to database 
                    tables (often called ORM). This way you can store, update, delete, 
                    and query for Java objects using a simple object oriented API. 
                    Save time and focus on real problems!</p>
                <p>A nice tutorial on how to works with GreenDAO is found <a href="http://www.devteam83.com/en/tutorial-greendao-from-scratch-part-1/">here</a>. 
                    A tip, is to add the dependencies using maven, not via direct download. But that is of course
                    your own choice. 
                </p>
            </div>
        </div>

    </div>
</article>