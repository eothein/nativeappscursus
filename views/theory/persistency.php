
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Persistency';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Persistency in Android</h1>
            <p>In this Chapter we will review some of the persistency methods 
                use in Android. For small sets of date we will use the following
                techniques:</p>
            <ul>
                <li><b>Shared Preferences</b> — When storing UI state, user preferences, or application settings, you
                    want a lightweight mechanism to store a known set of values. Shared Preferences let you save
                    groups of name/value pairs of primitive data as named preferences.</li>
                <li><b>Saved application UI state</b> — Activities and Fragments include specialized event handlers to
                    record the current UI state when your application is moved to the background.</li>
            </ul>
        </div>

    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Shared Preferences</h2>
                <p>If you have a relatively small collection of key-values that 
                    you'd like to save, you should use the SharedPreferences APIs.
                    A SharedPreferences object points to a file containing 
                    key-value pairs and provides simple methods to read and 
                    write them. Each SharedPreferences file is managed by 
                    the framework and can be private or shared.</p>
                <h3>Creating and saving shared preferences</h3>
                <p>Using the SharedPreferences class, you can create named maps of name/value pairs that can be
                    persisted across sessions and shared among application components running within the same application
                    sandbox. To create or modify a Shared Preference, call getSharedPreferences on the current Context, passing
                    in the name of the Shared Preference to change.</p>
                <pre class="prettyprint lang-java">
SharedPreferences mySharedPreferences = getSharedPreferences(MY_PREFS,
Activity.MODE_PRIVATE);
                </pre>
                <p>Shared Preferences are stored within the application’s sandbox, so they can be shared between an
                    application’s components but aren’t available to other applications.
                    To modify a Shared Preference, use the SharedPreferences.Editor class. Get the Editor object by
                    calling edit on the Shared Preferences object you want to change.</p>
                <pre class="prettyprint lang-java">
SharedPreferences.Editor editor = mySharedPreferences.edit();
                </pre>
                <p>Use the put methods to insert or update the values associated with the specifi ed name</p>
                <pre class="prettyprint lang-java">
// Store new primitive types in the shared preferences object.
editor.putBoolean(“isTrue”, true);
editor.putFloat(“lastFloat”, 1f);
editor.putInt(“wholeNumber”, 2);
editor.putLong(“aNumber”, 3l);
editor.putString(“textEntryValue”, “Not Empty”);
editor.apply();
                </pre>
                <p>To save edits, call apply  on the Editor object to save the changes asynchronously.</p>
                <h3>Retrieving shared preferences</h3>
                <p>Accessing Shared Preferences, like editing and saving them, is done using the getSharedPreferences
                    method. Use the type-safe get methods to extract saved values. Each getter takes a key and a default
                    value (used when no value has yet been saved for that key.)</p>
                <pre class="prettyprint lang-java">
// Retrieve the saved values.
boolean isTrue = mySharedPreferences.getBoolean(“isTrue”, false);
float lastFloat = mySharedPreferences.getFloat(“lastFloat”, 0f);
int wholeNumber = mySharedPreferences.getInt(“wholeNumber”, 1);
long aNumber = mySharedPreferences.getLong(“aNumber”, 0);
String stringPreference =
mySharedPreferences.getString(“textEntryValue”, “”);
                </pre>
                <h3>PreferenceActivity</h3>
                <p>There is a Preference framework you can use to store user preferences. 
                    You can check out this <a href="http://developer.android.com/reference/android/preference/PreferenceActivity.html"> site</a>
                    for more information.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Persisting the Activity State</h2>
                <h3>Saving Activity State Using Shared Preferences</h3>
                <p>If you want to save Activity information that doesn’t need to be shared with other components
                    (e.g., class instance variables), you can call Activity.getPreferences() without specifying a
                    Shared Preferences name. This returns a Shared Preference using the calling Activity’s class name as
                    the Shared Preference name.</p>
                <pre class="prettyprint lang-java">
// Create or retrieve the activity preference object.
SharedPreferences activityPreferences =
getPreferences(Activity.MODE_PRIVATE);
// Retrieve an editor to modify the shared preferences.
SharedPreferences.Editor editor = activityPreferences.edit();
// Retrieve the View
TextView myTextView = (TextView)findViewById(R.id.myTextView);
// Store new primitive types in the shared preferences object.
editor.putString(“currentTextValue”,
myTextView.getText().toString());
// Commit changes.
editor.apply();
                </pre>
                <h3>Saving/Restoring activity instance state using the lifecycle handlers</h3>
                <p>Activities offer the onSaveInstanceState handler to persist data associated with UI state across
                    sessions. It’s designed specifically to persist UI state should an Activity be terminated by the run
                    time, either in an effort to free resources for foreground applications or to accommodate restarts
                    caused by hardware confi guration changes.</p>
                <p>If an Activity is closed by the user (by pressing the Back button), or programmatically with a call to
                    finish, the instance state bundle will not be passed in to onCreate or onRestoreInstanceState
                    when the Activity is next created. Data that should be persisted across user sessions should be stored
                    using Shared Preferences, as described in the previous sections.</p>
                <pre class="prettyprint lang-java">
private static final String TEXTVIEW_STATE_KEY = “TEXTVIEW_STATE_KEY”;
@Override
public void onSaveInstanceState(Bundle saveInstanceState) {
    // Retrieve the View
    TextView myTextView = (TextView)findViewById(R.id.myTextView);
    // Save its state
    saveInstanceState.putString(TEXTVIEW_STATE_KEY,
    myTextView.getText().toString());
    super.onSaveInstanceState(saveInstanceState);
}
                </pre>
                <p>This handler will be triggered whenever an Activity completes its active lifecycle, but only when
                    it’s not being explicitly fi nished (with a call to finish). As a result, it’s used to ensure a consistent
                    Activity state between active lifecycles of a single user session.
                    The saved Bundle is passed in to the onRestoreInstanceState and onCreate methods if the application
                    is forced to restart during a session.</p>
                <pre class="prettyprint lang-java">
@Override
public void onCreate(Bundle savedInstanceState) {
    super.onCreate(savedInstanceState);
    setContentView(R.layout.main);
    TextView myTextView = (TextView)findViewById(R.id.myTextView);
    String text = “”;
    if (savedInstanceState != null &&
        savedInstanceState.containsKey(TEXTVIEW_STATE_KEY))
        text = savedInstanceState.getString(TEXTVIEW_STATE_KEY);
    myTextView.setText(text);
    }
}
                </pre>
                <h3>Saving/Restoring fragment Instance State</h3>
                <p>The UI for most applications will be encapsulated within Fragments. Accordingly, Fragments also
                    include an onSaveInstanceState handler that works in much the same way as its Activity counterpart.
                    The instance state persisted in the bundle is passed as a parameter to the Fragment’s onCreate,
                    onCreateView, and onActivityCreated handlers.</p>
                <p>If an Activity is destroyed and restarted to handle a hardware confi guration change, such as the
                    screen orientation changing, you can request that your Fragment instance be retained. By calling
                    setRetainInstance within a Fragment’s onCreate handler, you specify that Fragment’s instance
                    should not be killed and restarted when its associated Activity is re-created.
                    As a result, the onDestroy and onCreate handlers for a retained Fragment will not be called when
                    the device confi guration changes and the attached Activity is destroyed and re-created. This can
                    provide a signifi cant effi ciency improvement if you move the majority of your object creation into
                    onCreate, while using onCreateView to update the UI with the values stored within those persisted
                    instance values. Note that the rest of the Fragment’s lifecycle handlers, including onAttach, onCreateView,
                    onActivityCreated, onStart, onResume, and their corresponding tear-down handlers, will still
                    be called.</p>
            </div>
        </div>
    </div>
</article>