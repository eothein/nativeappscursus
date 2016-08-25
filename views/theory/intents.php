
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Intents and Broadcastreceivers';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Intents and Broadcastreceivers</h1>

            <p>Intents are used as a message-passing mechanism that works both within your application and
                between applications. </p>

        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Intents</h2>
                <p>You can use Intents to do the following:</p>
                <ul>
                    <li>Explicitly start a particular Service or Activity using its class name (already seen in previous lessons)</li>
                    <li>Implicitely start a particular Servie or Activity</li>
                    <li>Start an Activity or Service to perform an action with (or on) a particular piece of data</li>
                    <li>Broadcast that an event has occurred</li>
                </ul>
                <p>The complete explanation for using intents to start activities 
                    and listing for results can be found 
                    <a href="http://developer.android.com/training/basics/intents/sending.html">here</a>
                </p>
                <h3>Creating and using an explicit intent</h3>
                <pre class="prettyprint lang-java">
Intent intent = new Intent(MyActivity.this, MyOtherActivity.class);
startActivity(intent);   
                </pre>
                <h3>Creating and using an implicit intent</h3>

                <p>An implicit Intent is a mechanism that lets anonymous application components service action
                    requests. That means you can ask the system to start an Activity to perform an action without
                    knowing which application, or Activity, will be started. Implicit intents do not declare the class 
                    name of the component to start, but instead declare an action to perform. The action specifies 
                    the thing you want to do, such as view, edit, send, or get something. Intents often also include 
                    data associated with the action, such as the address you want to view, or the email message you 
                    want to send. Depending on the intent you want to create, the data might be a Uri, one of 
                    several other data types, or the intent might not need data at all.</p>
                <p>
                    The following <a href="http://developer.android.com/reference/android/content/Intent.html">link </a> shows some of the native actions available as static string
                    constants in the Intent class. When creating implicit Intents, you can use these actions, known as
                    Activity Intents, to start Activities and sub-Activities within your own applications.
                </p>
                <pre class="prettyprint lang-java">
if (somethingWeird && itDontLookGood) {
    Intent intent =
    new Intent(Intent.ACTION_DIAL, Uri.parse(“tel:555-2368”));
    startActivity(intent);
}
                </pre>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practice</div>
                    <div class="panel-body">
                        Tt’s good practice to determine if your call will resolve to an Activity before calling
                        startActivity.
                    </div>
                </div>

                <pre class="prettyprint lang-java">

if (somethingWeird && itDontLookGood) {
    // Create the impliciy Intent to use to start a new Activity.
    Intent intent =
    new Intent(Intent.ACTION_DIAL, Uri.parse(“tel:555-2368”));
    // Check if an Activity exists to perform this action.
    PackageManager pm = getPackageManager();
    ComponentName cn = intent.resolveActivity(pm);
    if (cn == null) {
        // If there is no Activity available to perform the action
        // Check to see if the Google Play Store is available.
        Uri marketUri =
        Uri.parse(“market://search?q=pname:com.myapp.packagename”);
        Intent marketIntent = new Intent(Intent.ACTION_VIEW).setData(marketUri);
        // If the Google Play Store is available, use it to download an application
        // capable of performing the required action. Otherwise log an
        // error.
        if (marketIntent.resolveActivity(pm) != null){
            startActivity(marketIntent);
        }
        else{
            Log.d(TAG, “Market client not available.”);
        }
    }
    else {
        startActivity(intent);
    }
}
                </pre>

                <h3>Returning a result from an Activity</h3>
                <p>
                    Where feedback is required, you can start an Activity as a sub-Activity that can pass results back
                    to its parent. Sub-Activities are actually just Activities opened in a different way. As such, you must
                    register them in the application manifest in the same way as any other Activity. Any manifest-registered
                    Activity can be opened as a sub-Activity, including those provided by the system or third-party
                    applications.
                    When a sub-Activity is finished, it triggers the onActivityResult event handler within the calling
                    Activity. Sub-Activities are particularly useful in situations in which one Activity is providing data
                    input for another, such as a user selecting an item from a list.
                    Launching Sub-Activities
                    The startActivityForResult method works much like startActivity, but with one important
                    difference. In addition to passing in the explicit or implicit Intent used to determine which Activity
                    to launch, you also pass in a request code. This value will later be used to uniquely identify the sub-
                    Activity that has returned a result. For code examples see <a href="http://developer.android.com/training/basics/intents/sending.html">here</a>
                </p>

                <h3>Allow to start your activity</h3>
                <p>
                    To allow other apps to start your activity, you need to add an intent-filter element in your manifest 
                    file for the corresponding activity element. In order to properly define which intents your activity can handle,
                    each intent filter you add should be as specific as possible in terms of the type of action and data the activity accepts.

                    The system may send a given Intent to an activity if that activity has an intent filter fulfills the 
                    following criteria of the Intent object:
                <ul>
                    <li>Action : A string naming the action to perform. </li>
                    <li>Data : A description of the data associated with the intent. </li>
                    <li>Category: Provides an additional way to characterize the activity handling the intent, usually related to the user gesture or location from which it's started.</li>
                </ul>
                <p>A complete code example is given <a href="http://developer.android.com/training/basics/intents/filters.html">here</a>
                </p>



                <?php
                echo newerton\fancybox\FancyBox::widget([
                    'target' => 'a[rel=fancybox]',
                    'helpers' => true,
                    'mouse' => true,
                    'config' => [
                        'maxWidth' => '50%',
                        'maxHeight' => '50%',
                        'playSpeed' => 7000,
                        'padding' => 0,
                        'fitToView' => false,
                        'width' => '40%',
                        'height' => '40%',
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

                echo Html::a(Html::img('@web/images/intents/intent.png', ['alt' => 'Implicit Intent',
                            'width' => '70%',
                            'class' => "img-responsive"]), '@web/images/intents/intent.png', ['rel' => 'fancybox']);
                ?>

            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Intents and broadcastreceivers</h2>
                <p>
                    So far, you’ve looked at using Intents to start new application components, but you can also use
                    Intents to broadcast messages anonymously between components via the sendBroadcast method. 
                    As a system-level message-passing mechanism, Intents are capable of sending structured messages
                    across process boundaries. As a result, you can implement Broadcast Receivers to listen for, and
                    respond to, these Broadcast Intents within your applications.
                </p>
                <p>Within your application, construct the Intent you want to broadcast and call sendBroadcast to send it.
                    Set the action, data, and category of your Intent in a way that lets Broadcast Receivers accurately
                    determine their interest.</p>
                <h3>Listening with a broadcastreceiver</h3>
                <p>
                    Broadcast Receivers are used to listen for Broadcast
                    Intents. For a Receiver to receive broadcasts, it must be registered, either in code or within the application
                    manifest. In either case, use an Intent Filter to specify which Intent actions and data your Receiver is listening for.
                </p>
                <p>In the case of applications that include manifest Receivers, the applications don’t have to be running
                    when the Intent is broadcast for those receivers to execute; they will be started automatically
                    when a matching Intent is broadcast. This is excellent for resource management, as it lets you create
                    event-driven applications that will still respond to broadcast events even after they’ve been closed or
                    killed.</p>

                <pre class="prettyprint lang-java">
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
    public class MyBroadcastReceiver extends BroadcastReceiver {
    @Override
    public void onReceive(Context context, Intent intent) {
        //TODO: React to the Intent received.
    }
}
                </pre>
                <p>The onReceive method will be executed on the main application thread when a Broadcast Intent
                    is received that matches the Intent Filter used to register the Receiver. The onReceive handler must
                    complete within five seconds;</p>
                <h3>Registering broadcastreceivers in code</h3>
                <p>Broadcast Receivers that affect the UI of a particular Activity are typically registered in code. A
                    Receiver registered programmatically will respond to Broadcast Intents only when the application
                    component it is registered within is running.
                    This is useful when the Receiver is being used to update UI elements in an Activity.</p>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practice</div>
                    <div class="panel-body">
                        It’s good practice to register the Receiver within the onResume handler and unregister it during
                        onPause.
                    </div>
                </div>

                <pre class="prettyprint lang-java">
                    
private IntentFilter filter = new IntentFilter(LifeformDetectedReceiver.NEW_LIFEFORM);
private LifeformDetectedReceiver receiver = new LifeformDetectedReceiver();
@Override
public void onResume() {
    super.onResume();
    // Register the broadcast receiver.
    registerReceiver(receiver, filter);
}
@Override
public void onPause() {
    // Unregister the receiver
    unregisterReceiver(receiver);
    super.onPause();
}
                </pre>
                <h3>Registering Broadcast Receivers in Your Application Manifest</h3>
                <p>To include a Broadcast Receiver in the application manifest, add a receiver tag within the application
                    node, specifying the class name of the Broadcast Receiver to register. The receiver node
                    needs to include an intent-filter tag that specifi es the action string being listened for.</p>
                <pre class="prettyprint lang-xml">
&lt;receiver android:name=”.LifeformDetectedReceiver”&gt;
&lt;intent-filter&gt;
&lt;action android:name=”com.paad.alien.action.NEW_LIFEFORM”/&gt;
&lt;/intent-filter&gt;
&lt;/receiver&gt;
                </pre>
                Broadcast Receivers registered this way are always active and will receive Broadcast Intents even
                when the application has been killed or hasn’t been started.
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h2 id="section-one">Extra: </h2>
        </div>
    </div>

</article>