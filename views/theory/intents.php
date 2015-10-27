
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
                    <li>Explicitly start a particular Service or Activity using its class name</li>
                    <li>Start an Activity or Service to perform an action with (or on) a particular piece of data</li>
                    <li>Broadcast that an event has occurred</li>
                </ul>
                <h3>Starting an activity</h3>
                <p>To create and display an Activity, call startActivity, passing in an Intent, as follows:</p>
                <pre class="prettyprint lang-java">
Intent intent = new Intent(MyActivity.this, MyOtherActivity.class);
startActivity(intent);
                </pre>
                <p>The startActivity method finds and starts the single Activity that best matches your Intent.</p>
                <h3>Implicit intents</h3>
                <p>
                    An implicit Intent is a mechanism that lets anonymous application components service action
                    requests. That means you can ask the system to start an Activity to perform an action without
                    knowing which application, or Activity, will be started.
                    For example, to let users make calls from your application, you could implement a new dialer, or
                    you could use an implicit Intent that requests the action (dialing) be performed on a phone number
                    (represented as a URI).
                </p>
                <pre class="prettyprint lang_java">
if (somethingWeird && itDontLookGood) {
    Intent intent =
    new Intent(Intent.ACTION_DIAL, Uri.parse(“tel:555-2368”));
    startActivity(intent);
}
                </pre>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Intents and broadcastreceivers</h2>
                <p>
                </p>
            </div>
        </div>
    </div>

</article>