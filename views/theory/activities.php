
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Applications and Activities';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Creating Applications and Activities</h1>

            <p>This lesson covers the fundamental building blocks needed to create Android 
                applications. A thorough understanding of these components is necessary in order
                to compile efficient and succesful native Android applications. We will discuss activities,
                the Android manifest file and using external resources in an application.</p>  
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">The Android application life cycle</h2>

                <p>Unlike many traditional application platforms, Android applications have limited control over their
                    own lifecycles. Instead, application components must listen for changes in the application state and
                    react accordingly, taking particular care to be prepared for untimely termination.</p>
                <p>By default, each Android application runs in its <b>own process</b>, each of which is running a separate
                    instance of Dalvik. Memory and process management is handled exclusively by the run time.</p>
                <p>Android aggressively manages its resources, doing whatever’s necessary to ensure a smooth and
                    stable user experience. In practice that means that processes (and their hosted applications) <b>will be
                        killed, in some case without warning</b>, to free resources for higher-priority applications.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-9">
                <p>The order in which processes are killed to reclaim resources is determined by the priority of their
                    hosted applications. An application’s priority is equal to that of its highest-priority component.
                    If two applications have the same priority, the process that has been at that priority longest will be
                    killed fi rst.</p>
                <p>It’s important to structure your application to ensure
                    that its priority is appropriate for the work it’s doing. If
                    you don’t, your application could be killed while it’s in
                    the middle of something important, or it could remain
                    running when it is no longer needed.</p>
                <p>The following list details each of the application states</p>
                <ul>
                    <li><b>Active processes</b> — Active (foreground) processes
                        have application components the user is interacting
                        with. These are the processes Android tries
                        to keep responsive by reclaiming resources from
                        other applications.</li>
                    <li><b>Visible processes</b> — Visible but inactive processes are those hosting “visible” Activities</li>
                    <li><b>Started Service processes</b> — Processes hosting Services that have been started. Because these
                        Services don’t interact directly with the user, they receive a slightly lower priority than visible.</li>
                    <li><b>Background processes</b> — Processes hosting Activities that aren’t visible and that don’t have
                        any running Services.</li>
                    <li><b>Empty processes</b> — To improve overall system performance, Android will often retain an
                        application in memory after it has reached the end of its lifetime. Android maintains this
                        cache to improve the start-up time of applications when they’re relaunched. These processes
                        are routinely killed, as required.</li>
                </ul>
            </div>
            <div class="col-sm-3">
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

                echo Html::a(Html::img('@web/images/activities/priority.jpg', ['alt' => 'Android versions', 'width' => '100%', 'class' => "img-responsive"]), '@web/images/activities/priority.jpg', ['rel' => 'fancybox']);
                ?>

            </div>

        </div>

        <div class="row">
            <div class="col-sm-9">
                <h2 id="section-two">Basic Building blocks: Activities</h2>
                <p>An application usually consists of multiple activities that are 
                    loosely bound to each other. Typically, one activity in an application 
                    is specified as the "main" activity, which is presented to the user when 
                    launching the application for the first time. Each activity can then start 
                    another activity in order to perform different actions. Each time a new activity 
                    starts, the previous activity is stopped, but the system preserves the activity 
                    in a stack (the "back stack"). When a new activity starts, it is pushed onto 
                    the back stack and takes user focus. The back stack abides to the basic "last in, 
                    first out" stack mechanism, so, when the user is done with the current activity 
                    and presses the Back button, it is popped from the stack (and destroyed) and the 
                    previous activity resumes. 
            </div>
            <br>
            <div class="col-sm-3">

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

                echo Html::a(Html::img('@web/images/activities/activities.jpg', ['alt' => 'Android life cycle',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/activities/activities.jpg', ['rel' => 'fancybox']);
                ?>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                <p>Extend Activity to create a new Activity class. Within this new class you must define the UI and
                    implement your functionality. An empty Activity isn’t particularly useful, so the first thing you’ll 
                    want to do is create the UI with Fragments, layouts, and Views. This will be covered a little further on.</p>


                <h3>The Activity Lifecycle</h3>
                <p>As Activities are created and destroyed, they move in and out of the stack (the "back stack").
                    As they do so, they transition through four possible states</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ol>

                    <li><b>Active</b> — When an Activity is at the top of the stack it is the visible, focused, foreground
                        Activity that is receiving user input. Android will attempt to keep it alive at all costs, killing
                        Activities further down the stack as needed, to ensure that it has the resources it needs. When
                        another Activity becomes active, this one will be paused.</li>
                    <li><b>Paused</b> — In some cases your Activity will be visible but will not have focus; at this point
                        it’s paused. This state is reached if a transparent or non-full-screen Activity is active in front.</li>
                    <li><b>Stopped</b> — When an Activity isn’t visible, it “stops.” The Activity will remain in memory,
                        retaining all state information; however, it is now a candidate for termination when the system
                        requires memory elsewhere. When an Activity is in a stopped state, it’s important to save
                        data and the current UI state, and to stop any non-critical operations.</li>
                    <li><b>Inactive</b> — After an Activity has been killed, and before it’s been launched, it’s inactive.
                        Inactive Activities have been removed from the Activity stack and need to be restarted before
                        they can be displayed and used.</li>
                </ol>
                <p>When an activity transitions into and out of the different states described above, it is notified through 
                    various callback methods. All of the callback methods are hooks that you can override to do appropriate 
                    work when the state of your activity changes.</p>
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

                echo Html::a(Html::img('@web/images/activities/activitylifecycle.jpg', ['alt' => 'Android life cycle',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/activities/activitylifecycle.jpg', ['rel' => 'fancybox']);
                ?>

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <pre class="prettyprint lang-java">
public class ExampleActivity extends Activity {
        @Override
        public void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            // The activity is being created.
        }
        @Override
        protected void onStart() {
            super.onStart();
            // The activity is about to become visible.
        }
        @Override
        protected void onResume() {
            super.onResume();
            // The activity has become visible (it is now "resumed").
        }
        @Override
        protected void onPause() {
            super.onPause();
            // Another activity is taking focus (this activity is about to be "paused").
        }
        @Override
        protected void onStop() {
            super.onStop();
            // The activity is no longer visible (it is now "stopped")
        }
        @Override
        protected void onDestroy() {
            super.onDestroy();
            // The activity is about to be destroyed.
        }
}
                </pre>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Saving the activity state</h3>
                <p>When the system destroys an activity in order to recover memory, 
                    the Activity object is destroyed. Hence, the system cannot simply resume 
                    it with its state intact. Instead, the system must recreate the Activity 
                    object if the user navigates back to it. Yet, the user is unaware that 
                    the system destroyed the activity and recreated it and, thus, probably 
                    expects the activity to be exactly as it was. In this situation, you can 
                    ensure that important information about the activity state is preserved by 
                    implementing an additional callback method that allows you to save information 
                    about the state of your activity: onSaveInstanceState().</p>
                <p>The system calls onSaveInstanceState() before making the activity vulnerable to destruction.
                    The system passes this method a Bundle in which you can save state information about 
                    the activity as name-value pairs, using methods such as putString() and putInt(). 
                    Then, if the system kills your application process and the user navigates back to 
                    your activity, the system recreates the activity and passes the Bundle to both 
                    onCreate() and onRestoreInstanceState()</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">What to save?</div>
                    Some of the activity state is restored by the Activity class's default implementation of onSaveInstanceState(). 
                    Specifically, the default implementation calls the corresponding onSaveInstanceState() method for every View in the layout, 
                    which allows each view to provide information about itself that should be saved. For example, the EditText 
                    widget saves any text entered by the user. The only work required by you is to provide a unique 
                    ID (with the android:id attribute) for each widget you want to save its state. 
                    If a widget does not have an ID, then the system cannot save its state.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Handling configuration changes</h3>
                <p>Some device configurations can change during runtime (such as screen orientation, 
                    keyboard availability, and language). When such a change occurs, Android recreates 
                    the running activity (the system calls onDestroy(), then immediately calls onCreate()). 
                    This behavior is designed to help your application adapt to new configurations by automatically 
                    reloading your application with alternative resources that you've provided (such as different 
                    layouts for different screen orientations and sizes).
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Handling programmatically</div>
                    The best way to handle such a restart is to save and restore the state of your activity 
                    using onSaveInstanceState() and onRestoreInstanceState() (or onCreate()).
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <h2 id="section-three">The manifest file</h2>
            <p>Each Android project includes a manifest file, AndroidManifest.xml, stored in the root of its project
                hierarchy. The manifest defines the structure and metadata of your application, its components,
                and its requirements. In this section we will briefly describe what you can find in the manifest,
                but during the lessons we will have a closer look into it.</p>
            <ul>
                <li>It includes nodes for each of the Activities, Services, Content Providers, and Broadcast Receivers
                    that make up your application and, using Intent Filters and Permissions, determines how they interact
                    with each other and with other applications.</li>
                <li>The manifest can also specify application metadata (such as its icon, version number, or theme), and
                    additional top-level nodes can specify any required permissions, unit tests, and define hardware,
                    screen, or platform requirements.</li>
                <li>The manifest is made up of a root manifest tag with a package attribute set to the project’s package.
                    It should also include an xmlns:android attribute that supplies several system attributes used
                    within the fi le.</li>
                <li>Use the versionCode attribute to define the current application version as an integer that increases
                    with each version iteration, and use the versionName attribute to specify a public version that will
                    be displayed to users.</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <pre class="prettyprint lang-xml">
<?xml version="1.0" encoding="utf-8"?>
&lt manifest xmlns:android="http://schemas.android.com/apk/res/android" package="be.hogent.helloandroid"&gt;
    &lt;application
        android:allowBackup="true"
        android:icon="@mipmap/ic_launcher"
        android:label="@string/app_name"
        android:theme="@style/AppTheme" &gt;
        &lt;activity
            android:name=".MainActivity"
            android:label="@string/app_name" &gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.MAIN" /&gt;
                &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
    &lt;/application&gt;
&lt;/manifest&gt;
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <h2 id="section-four">Externalizing resources</h2>
            <p>It’s always good practice to keep non-code resources, such as images and string constants, external
                to your code. Android supports the externalization of resources, ranging from simple values such as
                strings and colors to more complex resources such as images (Drawables), animations, themes, and
                menus. Perhaps the most powerful externalizable resources are layouts.</p>
            <p>By externalizing resources, you make them easier to maintain, update, and manage. This also
                lets you easily define alternative resource values for internationalization and to include different
                resources to support variations in hardware — particularly, screen size and resolution.</p>
            <h3>Creating Resources</h3>
            <p>Application resources are stored under the res folder in your project hierarchy. Each of the available
                resource types is stored in subfolders, grouped by resource type. 
                When your application is built, these resources will be compiled and compressed
                as efficiently as possible and included in your application package.
                This process also generates an R class file that contains references to each of the resources you
                include in your project. This enables you to reference the resources in your code, with the advantage
                of design-time syntax checking.</p>
        </div>
        <div class="col-sm-4">
            <pre class="prettyprint">
 MyProject/
    src/  
        MyActivity.java  
    res/
        drawable/  
            graphic.png  
        layout/  
            main.xml
            info.xml
        mipmap/  
            icon.png 
        values/  
            strings.xml  
            </pre>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>Types of resources</h3>
            <h4>Strings</h4>
            <p>String resources are specified with the string tag and simple markup attributes can be added.</p>
            <pre class="prettyprint lang-xml">
    &lt;?xml version="1.0" encoding="utf-8"?&gt;
    &lt;resources&gt;
        &lt;string name="string_name"&gt;text_string&lt;/string&gt;
    &lt;/resources&gt;                
            </pre>

            <h4>Colors</h4>
            <p>Use the color tag to define a new color resource. Specify the color value using a # symbol followed
                by the (optional) alpha channel, and then the red, green, and blue values.</p>
            <pre class="prettyprint lang-xml">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;selector xmlns:android="http://schemas.android.com/apk/res/android"&gt;
    &lt;item android:state_pressed="true"
          android:color="#ffff0000"/&gt; &lt;!-- pressed --&gt;
    &lt;item android:state_focused="true"
          android:color="#ff0000ff"/&gt; &lt;!-- focused --&gt;
    &lt;item android:color="#ff000000"/&gt; &lt;!-- default --&gt;
&lt;/selector&gt;                
            </pre>

            <h4>Drawable resources</h4>
            <p>A drawable resource is a general concept for a graphic that can be drawn to the screen : bitmap
                and xml descriptions of graphics.</p>
            <pre class="prettyprint lang-xml">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;bitmap xmlns:android="http://schemas.android.com/apk/res/android"
    android:src="@drawable/icon"
    android:tileMode="repeat" /&gt;               
            </pre>


            <h4>Layouts</h4>
            <p>Layout resources enable you to decouple your presentation layer from your business logic by designing
                UI layouts in XML rather than constructing them in code.
                You can use layouts to define the UI for any visual component, including Activities, Fragments,
                and Widgets. Once defined in XML, the layout must be “inflated” into the user interface. Within
                an Activity this is done using setContentView (usually within the onCreate method), whereas
                Fragment Views are inflated using the inflate method from the Inflator object passed in to the
                Fragment’s onCreateView handler. Using layouts to construct your screens in XML is best practice in Android.</p>
            <pre class="prettyprint lang-xml">
&lt;?xml version="1.0" encoding="utf-8"?>
&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
              android:layout_width="fill_parent" 
              android:layout_height="fill_parent" 
              android:orientation="vertical" >
    &lt;TextView android:id="@+id/text"
              android:layout_width="wrap_content"
              android:layout_height="wrap_content"
              android:text="Hello, I am a TextView" />
    &lt;Button android:id="@+id/button"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="Hello, I am a Button" />
&lt;/LinearLayout>             
            </pre>
        </div>
    </div>

</article>