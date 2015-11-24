
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