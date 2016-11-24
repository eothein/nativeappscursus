
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
            <h1>Services and networks and ... </h1>

        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Services</h2>
                <p>
                    Android offers the Service class to create application components that handle long-lived
                    operations and include functionality that doesn’t require a user interface.
                    By using Services, you can ensure that your applications can continue to run even when their
                    UI isn’t visible. Although Services run without a dedicated GUI, they still execute in the main Thread of the
                    application’s process — just like Activities and Broadcast Receivers. To keep your applications
                    responsive, you’ll learn to move time-consuming processes onto background Threads using the
                    Thread and AsyncTask classes.
                </p>
                Services are a “Swiss Army knife” for a wide range of functions that do not require
                direct access to an activity’s user interface, such as
                <p>
                <ul>
                    <li>Performing operations that need to continue even if the user leaves the
                        application’s activities, like a long download (as seen with the Play Store) or
                        playing music (as seen with Android music apps)</li>
                    <li>
                        Performing operations that need to exist regardless of activities coming and
                        going, such as maintaining a chat connection in support of a chat
                        application
                    </li>
                    <li>
                        Providing a local API to remote APIs, such as might be provided by a Web service.
                    </li>
                    <li>
                        Performing periodic work without user intervention, akin to cron jobs or
                        Windows scheduled tasks
                    </li>

                </ul>
                </p>
                <p>
                    Services are started, stopped, and controlled from other application components, including Activities,
                    Broadcast Receivers, and other Services. If your application provides functionality that doesn’t
                    depend directly on user input, or includes time-consuming operations, Services may be the answer.
                </p>



                <div class="panel panel-warning">
                    <div class="panel-heading">Synchronoys or Asynchronoys</div>
                    <div class="panel-body">
                        Services are launched on the main Application Thread, meaning that any processing 
                        will happen on the main GUI Thread. The standard pattern for implementing
                        a Service is to create and run a new Thread  to perform the processing
                        in the background, and then stop the Service when it’s been completed.
                    </div>
                </div>
                <p>
                    There are two sorts of services:
                </p>
                <ul>
                    <li>A service is <b>"started"</b> when an application component 
                        (such as an activity) starts it by calling startService(). 
                        Once started, a service can run in the background indefinitely, 
                        even if the component that started it is destroyed. Usually, 
                        a started service performs a single operation and does not return 
                        a result to the caller. For example, it might download or upload 
                        a file over the network. When the operation is done, 
                        the service should stop itself.</li>
                    <li>A service is <b>"bound"</b> when an application component 
                        binds to it by calling bindService(). A bound service offers 
                        a client-server interface that allows components to interact 
                        with the service, send requests, get results, and even do 
                        so across processes with interprocess communication (IPC). 
                        A bound service runs only as long as another application 
                        component is bound to it. Multiple components can bind 
                        to the service at once, but when all of them unbind, 
                        the service is destroyed.</li>
                </ul>
                <p>
                    The basic features and implementation of a service can be seen <a href="http://developer.android.com/guide/components/services.html">here</a>
                </p>

                <h3>The Service Class</h3>
                <p>Just as an activity in your application extends either Activity or an Androidsupplied
                    Activity subclass, a service in your application extends either Service or
                    an Android-supplied Service subclass. The most common Service subclass is
                    IntentService, used primarily for the command pattern.</p>
                <p>As with activities, services initialize whatever they need in onCreate() and clean up
                    those items in onDestroy(). And, as with activities, the onDestroy() method of a
                    service might not be called, if Android terminates the entire application process,
                    such as for emergency RAM reclamation.
                    The onStartCommand() and onBind() lifecycle methods will be implemented based
                    on your choice of communicating to the client.</p>
                <h3>Manifest Entry</h3>
                <p>Finally, you need to add the service to your AndroidManifest.xml file, for it to be
                    recognized as an available service for use. That is simply a matter of adding a
                    service element as a child of the application element, providing android:name
                    to reference your service class.
                    Since the service class is in the same Java namespace as everything else in this
                    application, we can use the shorthand (e.g., "PlayerService") to reference our class.
                    For example, here is a manifest showing the service element:</p>
                <div class="col-sm-12">
                    <pre class="prettyprint lang-xml">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
package="com.commonsware.android.fakeplayer"
android:versionCode="1"
android:versionName="1.0"&gt;
    &lt;supports-screens
    android:anyDensity="true"
    android:largeScreens="true"
    android:normalScreens="true"
    android:smallScreens="true"/&gt;
    &lt;uses-sdk
    android:minSdkVersion="14"
    android:targetSdkVersion="14"/&gt;
    &lt;application
    android:icon="@drawable/ic_launcher"
    android:label="@string/app_name"
    android:theme="@android:style/Theme.Holo.Light.DarkActionBar"&gt;
    &lt;activity
    android:name="FakePlayer"
    android:label="@string/app_name"&gt;
    &lt;intent-filter&gt;
        &lt;action android:name="android.intent.action.MAIN"/&gt;
        &lt;category android:name="android.intent.category.LAUNCHER"/&gt;
    &lt;/intent-filter&gt;
    &lt;/activity&gt;
    &lt;service android:name="PlayerService"/&gt;
&lt;/application&gt;
&lt;/manifest&gt;
                    </pre>
                </div>

                <h3>Communicating To Services</h3>
                <h4>Sending Commands with startService()</h4>
                <p>The simplest way to work with a service is to call startService(). The
                    startService() method takes an Intent parameter, much like startActivity()
                    does. Make sure that: </p>
                <ol>
                    <li>Identify the service to communicate with</li>
                    <li>Supply parameters, in the form of Intent extras, to tell the service what it is
                        supposed to do</li>
                </ol>
                <p>The call to startService() is asynchronous, so the client will not block. The service
                    will be created if it is not already running, and it will receive the Intent via a call to
                    the onStartCommand() lifecycle method. The service can do whatever it needs to in
                    onStartCommand(), but since onStartCommand() is called on the main application
                    thread, it should do its work very quickly. Anything that might take more than a
                    handful of milliseconds should be delegated to a background thread.</p>

                <p>The onStartCommand() method can return one of several values, mostly to indicate
                    to Android what should happen if the service’s process should be killed while it is
                    running. The most likely return values are:</p>
                <ol>
                    <li>START_STICKY, meaning that the service should be moved back into the
                        started state (as if onStartCommand() had been called), but do not re-deliver
                        the Intent to onStartCommand()</li>
                    <li>START_REDELIVER_INTENT, meaning that the service should be restarted via a
                        call to onStartCommand(), supplying the same Intent as was delivered this
                        time</li>
                    <li>START_NOT_STICKY, meaning that the service should remain stopped until
                        explicitly started by application code</li>
                    <p>
                        By default, calling startService() not only sends the command, but tells Android
                        to keep the service running until something tells it to stop. One way to stop a service
                        is to call stopService(), supplying the same Intent used with startService(), or
                        at least one that is equivalent (e.g., identifies the same class). At that point, the
                        service will stop and will be destroyed. Note that stopService() does not employ
                        any sort of reference counting, so three calls to startService() will result in a single
                        service running, which will be stopped by a call to stopService().
                        Another possibility for stopping a service is to have the service call stopSelf() on
                        itself. You might do this if you use startService() to have a service begin running
                        and doing some work on a background thread, then having the service stop itself
                        when that background work is completed.
                    </p>


                </ol>

                <h4>Binding to Services</h4>
                <p>Another approach to communicating with a service is to use the binding pattern.
                    Here, instead of packaging commands to be sent via an Intent, you can obtain an
                    actual API from the service, with whatever data types, return values, and so on that
                    you wish. You then invoke that API no different than you would on some local
                    object.
                    The benefit is the richer API. The cost is that binding is more complex to set up and
                    more complex to maintain, particularly across configuration changes.
                    The reader is encourages to look up the binding service API. </p>

                <h4>IntentService </h4>
                <p>
                    The IntentService has a background thread, so work in the servie can
                    take as long as needed. An IntentService will automatically shut down when the
                    work is done, so the service will not linger and you do not need to worry about
                    shutting it down yourself. Your activity can simply send a command via
                    startService() to the IntentService to tell it to go do the work.
                </p>

                <p> The examples used in this section are shown in 
                    <a href="https://github.com/commonsguy/cw-omnibus/tree/master/Service">here</a></p>

                <h2>AsyncTask</h2>
                <p>This class allows to perform background operations and publish results on the UI thread without having to manipulate threads and/or handlers.

                    AsyncTask is designed to be a helper class around Thread and
                    Handler and does not constitute a generic threading framework.
                    AsyncTasks should ideally be used for short operations (a few seconds at the most.)
                    If you need to keep threads running for long periods of time, 
                    it is highly recommended you use the various APIs </p>
                <p>More information about AsyncTasks can be found 
                    <a href="http://developer.android.com/reference/android/os/AsyncTask.html"> here </a></p>
                <h2>Volley</h2>
                <p>Volley is an HTTP library that makes networking for Android 
                    apps easier and most importantly, faster. 
                    Working with Volley is explained 
                    <a href="http://developer.android.com/training/volley/index.html">here</a></p>
                <h2>RertroFit</h2>
                <p>Retrofit is a type-safe REST client for Android built by Square.
                    The library provides a powerful framework for authenticating and 
                    interacting with APIs and sending network requests with OkHttp</p>
                <p>More information about RetroFit can be foun <a href="http://square.github.io/retrofit/">here</a></p>
                <h2>GSON</h2>
                <p>This is a Java serialization library that can convert Java Objects into JSON and back. </p>
                <p>More information can be found <a href="https://sites.google.com/site/gson/gson-user-guide">here</a></p>
            </div>
        </div>

</article>