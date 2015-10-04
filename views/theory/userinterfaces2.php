<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'User Interfaces 2';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>In this lesson we will further explore the wonderful world of Android
                User Interfaces.</h1>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-8">
                <h2 id="section-one">Fragments</h2>
                <p>Fragments enable you to divide your Activities into fully encapsulated reusable components, each
                    with its own lifecycle and UI. The primary advantage of Fragments is the ease with which you can create dynamic and flexible UI
                    designs that can be adapted to suite a range of screen sizes — from small-screen smartphones to tablets.
                    Each Fragment is an independent module that is tightly bound to the Activity into which it is placed.
                    Fragments can be reused within multiple activities, as well as laid out in a variety of combinations to
                    suit multipane tablet UIs and added to, removed from, and exchanged within a running Activity to
                    help build dynamic UIs.</p>
                <p>Although it is not necessary to divide your Activities (and their corresponding layouts) into
                    Fragments, doing so will drastically improve the fl exibility of your UI and make it easier for you to
                    adapt your user experience for new device confi gurations.</p>
                <h3>Example</h3>
                <p> When designing your application to support both tablets and handsets, 
                    you can reuse your fragments in different layout configurations to optimize 
                    the user experience based on the available screen space. For example, 
                    on a handset, it might be necessary to separate fragments to provide
                    a single-pane UI when more than one cannot fit within the same activity.</p>
            </div>

            <div class="col-sm-4">

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

                echo Html::a(Html::img('http://developer.android.com/images/fundamentals/fragments.png', ['alt' => 'Playing Board',
                            'width' => '100%',
                            'class' => "img-responsive"]), 'http://developer.android.com/images/fundamentals/fragments.png', ['rel' => 'fancybox']);
                ?>
            </div>

        </div>



        <div class="row">
            <div class="col-sm-6">
                <h3>Creating a fragment</h3>
                <p>To create a fragment, you must create a subclass of Fragment (or an existing subclass of it). 
                    The Fragment class has code that looks a lot like an Activity. It contains callback methods 
                    similar to an activity, such as onCreate(), onStart(), onPause(), and onStop(). </p>
                <pre class="prettyprint lang-java">
package com.hogent.fragments;
import android.app.Activity;
import android.app.Fragment;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
public class MySkeletonFragment extends Fragment {
    
    // Called when the Fragment is attached to its parent Activity.
    @Override
    public void onAttach(Activity activity) {
        super.onAttach(activity);
        // Get a reference to the parent Activity.
    }
    
// Called to do the initial creation of the Fragment.
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // Initialize the Fragment.
    }
   
     // Called once the Fragment has been created in order for it to
    // create its user interface.
    @Override
    public View onCreateView(LayoutInflater inflater,
    ViewGroup container,
    Bundle savedInstanceState) {
        // Create, or inflate the Fragment’s UI, and return it.
        // If this Fragment has no UI then return null.
        return inflater.inflate(R.layout.my_fragment, container, false);
    }
   
     // Called once the parent Activity and the Fragment’s UI have
    // been created.
    @Override
    public void onActivityCreated(Bundle savedInstanceState) {
        super.onActivityCreated(savedInstanceState);
        // Complete the Fragment initialization – particularly anything
        // that requires the parent Activity to be initialized or the
        // Fragment’s view to be fully inflated.
    }
    
    // Called at the start of the visible lifetime.
    @Override
    public void onStart(){
        super.onStart();
        // Apply any required UI change now that the Fragment is visible.
    }
    
    // Called at the start of the active lifetime.
    @Override
    public void onResume(){
        super.onResume();
        // Resume any paused UI updates, threads, or processes required continues
        // by the Fragment but suspended when it became inactive.
    }
    
    // Called at the end of the active lifetime.
    @Override
    public void onPause(){
        // Suspend UI updates, threads, or CPU intensive processes
        // that don’t need to be updated when the Activity isn’t
        // the active foreground activity.
        // Persist all edits or state changes
        // as after this call the process is likely to be killed.
        super.onPause();
    }
    
    // Called to save UI state changes at the
    // end of the active lifecycle.
    @Override
    public void onSaveInstanceState(Bundle savedInstanceState) {
        // Save UI state changes to the savedInstanceState.
        // This bundle will be passed to onCreate, onCreateView, and
        // onCreateView if the parent Activity is killed and restarted.
        super.onSaveInstanceState(savedInstanceState);
    }
    
    // Called at the end of the visible lifetime.
    @Override
    public void onStop(){
        // Suspend remaining UI updates, threads, or processing
        // that aren’t required when the Fragment isn’t visible.
        super.onStop();
    }

    // Called when the Fragment’s View has been detached.
    @Override
    public void onDestroyView() {
    // Clean up resources related to the View.
        super.onDestroyView();
    }

    // Called at the end of the full lifetime.
    @Override
    public void onDestroy(){
        // Clean up any resources including ending threads,
        // closing database connections etc.
        super.onDestroy();
    }

    // Called when the Fragment has been detached from its parent Activity.
    @Override
    public void onDetach() {
        super.onDetach();
    }
}
                </pre>
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

                echo Html::a(Html::img('http://developer.android.com/images/fragment_lifecycle.png', ['alt' => 'Playing Board',
                            'width' => '100%',
                            'class' => "img-responsive"]), 'http://developer.android.com/images/fragment_lifecycle.png', ['rel' => 'fancybox']);
                ?>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Detecting the swipe motion</h2>
                <p>A touch gesture occurs when a user places one or more fingers on the touch screen, 
                    and your application needs to interpret that pattern of touches as a particular gesture. 
                    There are correspondingly two phases to gesture detection: </p>
                <ol>
                    <li>Gathering data about touch events.</li>
                    <li>Interpreting the data to see if it meets the criteria for any of the gestures your app supports.</li>
                </ol>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Support library</h3>
                    </div>
                    <div class="panel-body">
                        The examples in this lesson use the GestureDetectorCompat and MotionEventCompat 
                        classes. These classes are in the <a href="http://developer.android.com/tools/support-library/index.html">Support Library</a>. You should use Support Library 
                        classes where possible to provide compatibility with devices running Android 1.6 
                        and higher. This is <b>not</b> covered in the book.
                    </div>
                </div>
                <p>
                <p>For each gesture, the onTouchEvent handler of the View where the gesture happened is fired several times. Starting when the user touches
                    the screen, multiple times while the system tracks the current finger position, and, finally, once more
                    when the contact ends. An example can be found here:</p>
                <pre class="prettyprint">
                    public class MainActivity extends Activity {
...
// This example shows an Activity, but you would use the same approach if
// you were subclassing a View.
@Override
public boolean onTouchEvent(MotionEvent event){ 
        
    int action = MotionEventCompat.getActionMasked(event);
        
    switch(action) {
        case (MotionEvent.ACTION_DOWN) :
            Log.d(DEBUG_TAG,"Action was DOWN");
            return true;
        case (MotionEvent.ACTION_MOVE) :
            Log.d(DEBUG_TAG,"Action was MOVE");
            return true;
        case (MotionEvent.ACTION_UP) :
            Log.d(DEBUG_TAG,"Action was UP");
            return true;
        case (MotionEvent.ACTION_CANCEL) :
            Log.d(DEBUG_TAG,"Action was CANCEL");
            return true;
        case (MotionEvent.ACTION_OUTSIDE) :
            Log.d(DEBUG_TAG,"Movement occurred outside bounds " +
                    "of current screen element");
            return true;      
        default : 
            return super.onTouchEvent(event);
    }      
}
                </pre>
                <p>You can then do your own processing on these events to determine if a gesture occurred. 
                    This is the kind of processing you would have to do for a custom gesture. However, if 
                    your app uses common gestures such as double tap, long press, fling, and so on, you can 
                    take advantage of the GestureDetector class. GestureDetector makes it easy for you to 
                    detect common gestures without processing the individual touch events yourself. </p>
                <h3>Listening without subclassing </h3>
                <p>You can listen for touch events without subclassing an existing View by attaching an
                    OnTouchListener to any View object, using the setOnTouchListener method</p>
                <pre class="prettyprint">
myView.setOnTouchListener(new OnTouchListener() {
    public boolean onTouch(View _view, MotionEvent _event) {
    // TODO Respond to motion events
    return false;
    s}
});
                </pre>
                <h3>Detecting common gestures </h3>
                <p>
                    Android provides the GestureDetector class for detecting common gestures. 
                    Some of the gestures it supports include onDown(), onLongPress(), onFling(), 
                    and so on. You can use GestureDetector in conjunction with the onTouchEvent() method described above.
                </p>
                <p>
                    When you instantiate a GestureDetectorCompat object, one of the parameters it takes is a class that 
                    implements the GestureDetector.OnGestureListener interface. GestureDetector.OnGestureListener notifies 
                    users when a particular touch event has occurred. To make it possible for your GestureDetector object 
                    to receive events, you override the View or Activity's onTouchEvent() method, and pass along all 
                    observed events to the detector instance.
                </p>
            </div>
        </div>


    </div>




</article>