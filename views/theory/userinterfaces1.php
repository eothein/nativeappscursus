
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'User interfaces : part1';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-6">
            <h1>Creating User interfaces</h1>

            <p>In this chapter you’ll discover the Android components used to create UIs. You’ll learn how to
                use layouts, Fragments, and Views to create functional and intuitive UIs for your Activities.</p>  
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

            echo Html::a(Html::img('@web/images/ui1/userInterface.png', ['alt' => 'Android versions',
                        'width' => '100%',
                        'class' => "img-responsive"]), '@web/images/ui1/userInterface.png', ['rel' => 'fancybox']);
            ?>
        </div>

    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Android User Interface Fundamentals</h2>
                <p>All visual components in Android descend from the View class and are referred to generically as
                    Views. The ViewGroup class is an extension of View designed to contain multiple Views. View Groups
                    are used most commonly to manage the layout of child Views, but they can also be used to create
                    atomic reusable components. View Groups that perform the former function are generally referred
                    to as layouts.</p>
                <p>The user interface for each component of your app is defined using a hierarchy of View and ViewGroup objects.
                    Each view group is an invisible container that organizes child views, while the child views may be input controls 
                    or other widgets that draw some part of the UI.</p>
                <p>Althought we can programmatically delcare the UI, we are going to declare UI elements in XML (in a resource file). 
                    Android provides a straightforward XML vocabulary that corresponds to the View classes and subclasses, such as those for widgets and layouts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Layouts and Layoutmanager</h3>
                <p>Layout Managers (or simply layouts) are extensions of the ViewGroup class and are used to position
                    child Views within your UI. Layouts can be nested, letting you create arbitrarily complex UIs using
                    a combination of layouts.</p>
                <p>The following list includes some of the most commonly used layout classes available in the
                    Android SDK</p>
                <ul>
                    <li><b>LinearLayout</b> - A layout that organizes its children into a single horizontal or vertical row. 
                        It creates a scrollbar if the length of the window exceeds the length of the screen.</li>
                    <li><b>RelativeLaytou</b> - Enables you to specify the location of child objects relative to each other 
                        (child A to the left of child B) or to the parent (aligned to the top of the parent).</li>
                    <li><b>FrameLayout</b> - The Frame Layout pins each child
                        view within its frame. The default position is the top-left corner, though you can use the
                        gravity attribute to alter its location.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <pre class="prettyprint lang-xml">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
              android:layout_width="match_parent"
              android:layout_height="match_parent"
              android:orientation="vertical" &gt;
    &lt;TextView android:id="@+id/text"
              android:layout_width="wrap_content"
              android:layout_height="wrap_content"
              android:text="Hello, I am a TextView" /&gt;
    &lt;Button android:id="@+id/button"
            android:layout_width="wrap_content"
            android:layout_height="wrap_content"
            android:text="Hello, I am a Button" /&gt;
&lt;/LinearLayout&gt;
                </pre>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3>Loading the resource file</h3>
                <p>When you compile your application, each XML layout file is compiled 
                    into a View resource. You should load the layout resource from your 
                    application code, in your Activity.onCreate() callback implementation. 
                    Do so by calling setContentView(), passing it the reference to your 
                    layout resource in the form of: R.layout.layout_file_name</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <pre class="prettyprint lang-java">
public void onCreate(Bundle savedInstanceState) {
    super.onCreate(savedInstanceState);
    setContentView(R.layout.main_layout);
}
                </pre>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3>Attributes</h3>
                <p>Every View and ViewGroup object supports their own variety of 
                    XML attributes. Some attributes are specific to a View object 
                    (for example, TextView supports the textSize attribute), 
                    but these attributes are also inherited by any View objects 
                    that may extend this class. Some are common to all View objects, 
                    because they are inherited from the root View class 
                    (like the id attribute).</p>
                <h4> The ID attribute </h4>
                <p>Any View object may have an integer ID associated with it, 
                    to uniquely identify the View within the tree. When the 
                    application is compiled, this ID is referenced as an integer, 
                    but the ID is typically assigned in the layout XML file as a 
                    string, in the id attribute.</p>
                <pre class="prettyprint lang-java">
android:id="@+id/my_button"
                </pre>
                <p> In order to create views and reference them from the application, 
                    in the onCreate methode</p>
                <pre class="prettyprint lang-java">
Button myButton = (Button) findViewById(R.id.my_button);
                </pre>  
                <h4>Width and height</h4>
                <p>All view groups include a width and height (layout_width and 
                    layout_height), and each view is required to define them.</p>
                <p>you will use one of these constants to set the width or height</p>
                <ul>
                    <li><b>wrap_content</b> tells your view to size itself to the dimensions required by its content.</li>
                    <li><b>match_parent</b> tells your view to become as big as its parent view group will allow.</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2>The action bar</h2>
                <p>In its most basic form, the action bar displays the title for the activity 
                    and the app icon on the left. Even in this simple form, the action bar is 
                    useful for all activities to inform users about where they are and to 
                    maintain a consistent identity for your app.</p>
                <p>Beginning with Android 3.0 (API level 11), the action bar is included in all activities 
                    that use the Theme.Holo theme (or one of its descendants). So to add the action bar 
                    to your activities, simply set either attribute to 11 or higher. </p>
                <p>The action bar allows you to add buttons for the most important action items. 
                    Those that appear directly in the action bar with an icon and/or text are known as action buttons. 
                    Actions that can't fit in the action bar or aren't important enough are hidden in the action overflow.</p>
                <p>All action buttons and other items available in the action overflow are defined in an XML menu resource. 
                    To add actions to the action bar, create a new XML file in your project's res/menu/ directory.
                    Add an item element for each item you want to include in the action bar.</p>
                <pre class="prettyprint">
&lt;menu xmlns:android="http://schemas.android.com/apk/res/android" &gt;
    &lt;!-- Search, should appear as action button --&gt;
    &lt;item android:id="@+id/action_search"
          android:icon="@drawable/ic_action_search"
          android:title="@string/action_search"
          android:showAsAction="ifRoom" /&gt;
    &lt;!-- Settings, should always be in the overflow --&gt;
    &lt;item android:id="@+id/action_settings"
          android:title="@string/action_settings"
          android:showAsAction="never" /&gt;
&lt;/menu&gt;
                </pre>
                <p>This piece of code declares  that the Search action should appear as an action button when room 
                    is available in the action bar, but the Settings action should always appear in the overflow.</p>
                <h3>Actions for the ActionBar</h3>
                When the user presses one of the action buttons or another item in the action overflow, 
                the system calls your activity's onOptionsItemSelected() callback method. 
                In your implementation of this method, call getItemId() on the given MenuItem 
                to determine which item was pressed—the returned ID matches the value you declared 
                in the corresponding item element's android:id attribute.
                <pre class="prettyprint">
 @Override
public boolean onOptionsItemSelected(MenuItem item) {
    // Handle presses on the action bar items
    switch (item.getItemId()) {
        case R.id.action_search:
            openSearch();
            return true;
        case R.id.action_settings:
            openSettings();
            return true;
        default:
            return super.onOptionsItemSelected(item);
    }
}                   
                </pre>
            </div>
        </div>

</article>