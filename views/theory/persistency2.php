
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Persistency using SQLite';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Persistency in Android using Databases</h1>
            <p>Using SQLite you can create fully encapsulated relational databases for your applications. Use them
                to store and manage complex, structured application data.
                Android databases are stored in the /data/data/&lt;package_name&gt;/databases folder on your
                device (or emulator). All databases are private, accessible only by the application that created them.</p>
            <p>Content Providers provide an interface for publishing and consuming data, based around a simple
                URI addressing model using the content:// schema. They enable you to decouple your application
                layers from the underlying data layers, making your applications data-source agnostic by abstracting
                the underlying data source. Content Providers can be shared between applications, queried for results, have their existing
                records updated or deleted, and have new records added. Any application — with the appropriate
                permissions — can add, remove, or update data from any other application, including the native
                Android Content Providers.
                Several native Content Providers have been made accessible for access by third-party applications,
                including the contact manager, media store, and calendar.
                By publishing your own Content Providers, you make it possible for you (and other developers) to
                incorporate and extend your data in new applications.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">SQLite</h2>
                <h3>Contract class</h3>
                <p>One of the main principles of SQL databases is the schema: a 
                    formal declaration of how the database is organized. The 
                    schema is reflected in the SQL statements that you use to 
                    create your database. You may find it helpful to create a 
                    companion class, known as a <b>contract</b> class, which explicitly 
                    specifies the layout of your schema in a systematic and 
                    self-documenting way.</p>
                <p>A contract class is a container for constants that define
                    names for URIs, tables, and columns. The contract class
                    allows you to use the same constants across all the other
                    classes in the same package. This lets you change a
                    column name in one place and have it propagate throughout
                    your code.</p>
                <p>A good way to organize a contract class is to put 
                    definitions that are global to your whole database 
                    in the root level of the class. Then create an inner 
                    class for each table that enumerates its columns.</p>
                <h3>Introducing the SQLiteOpenHelper</h3>
                <p><b>SQLiteOpenHelper</b> is an abstract class used to implement the best practice pattern for creating,
                    opening, and upgrading databases. By implementing an SQLite Open Helper, you hide the logic used to decide if a database needs to be
                    created or upgraded before it’s opened, as well as ensure that each operation is completed effi ciently.
                    It’s good practice to defer creating and opening databases until they’re needed. The SQLite Open
                    Helper caches database instances after they’ve been successfully opened, so you can make requests
                    to open the database immediately prior to performing a query or transaction. For the same reason,
                    there is no need to close the database manually unless you no longer need to use it again.</p>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practices</div>
                    <div class="panel-body">Database operations, especially opening or creating databases, can be time consuming.
                        To ensure this doesn’t impact the user experience, make all database
                        transactions asynchronous. Make sure you use the same connection when writing
                        and reading to the database (where locking is implemented). </div>
                </div>
                <p>To access a database using the SQLite Open Helper, call getWritableDatabase or
                    getReadableDatabase to open and obtain a writable or read-only instance of the underlying
                    database, respectively.</p>
                <p> You need to override the following methods to create and 
                    update your database.          </p>
                <ul>
                    <li>onCreate() - is called by the framework, if the database is accessed but not yet created.</li>

                    <li>onUpgrade() - called, if the database version is increased in your application code. 
                        This method allows you to update an existing database schema or to drop the 
                        existing database and recreate it via the onCreate() method.</li>
                </ul>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practices</div>
                    <div class="panel-body">
                        It is good practice to create a separate class per table. 
                        This class defines static onCreate() and onUpgrade()
                        methods. These methods are called in the corresponding 
                        methods of SQLiteOpenHelper. This way your implementation 
                        of SQLiteOpenHelper stays readable, 
                        even if you have several tables.
                    </div>
                </div>
                <p>An example of an implementation can be found <a href="https://android.googlesource.com/platform/development/+/05523fb0b48280a5364908b00768ec71edb847a2/samples/NotePad/src/com/example/android/notepad/NotePadProvider.java">here</a></p>
                <h3>Considerations</h3>
                <p>
                    You should keep the following Android-specific considerations in mind when designing your
                    database.</p>
                <ul>
                    <li>Files (such as bitmaps or audio fi les) are not usually stored within database tables. Use a
                        string to store a path to the fi le, preferably a fully qualifi ed URI.</li>
                    <li>Although not strictly a requirement, it’s strongly recommended that all tables include an
                        auto-increment key fi eld as a unique index fi eld for each row. If you plan to share your table
                        using a Content Provider, a unique ID fi eld is required.</li>
                </ul>
                <h3>Query a database</h3>
                <p>Each database query is returned as a <a href="http://developer.android.com/reference/android/database/Cursor.html" >Cursor</a>. 
                    This lets Android manage resources more efficiently
                    by retrieving and releasing row and column values on demand.
                    To execute a query on a Database object, use the <a href="http://developer.android.com/reference/android/database/sqlite/SQLiteDatabase.html">query</a> method with the 
                    necessary parameters.</p>
                <h3>Cursor</h3>
                <p>
                    A query returns a Cursor object. A Cursor represents the result 
                    of a query and basically points to one row of the query result. 
                    This way Android can buffer the query results efficiently; 
                    as it does not have to load all data into memory.</p>
                <p>To extract values from a Cursor, first use the moveTo&lt;location&gt; methods to
                    position the cursor at the correct row of the result Cursor, and then use the type-safe get&lt;type&gt;
                    methods (passing in a column index) to return the value stored at the current row for the specified
                    column. To find the column index of a particular column within a result Cursor, use its
                    getColumnIndexOrThrow and getColumnIndex methods. As an overview:</p>
                <ul>
                    <li>To get the number of elements of the resulting query use the getCount() method.</li>
                    <li>To move between individual data rows, you can use the moveToFirst() and moveToNext() 
                        methods. The isAfterLast() method allows to check if the end of the query result 
                        has been reached.</li>
                    <li>Cursor provides typed get*() methods, e.g. getLong(columnIndex), 
                        getString(columnIndex) to access the column data for the current 
                        position of the result. The "columnIndex" is the number 
                        of the column you are accessing.</li>
                    <li>Cursor also provides the getColumnIndexOrThrow(String) 
                        method which allows to get the column index for a column name of the table.</li>
                    <li>When you have finished using your result Cursor, it’s important to <b>close</b> it to avoid memory leaks
                        and reduce your application’s resource load</li>
                </ul>
                <h3>Adding, Updating, and Removing Rows</h3>
                <p>The SQLiteDatabase class exposes insert, delete, and update methods that encapsulate the SQL
                    statements required to perform these actions. Additionally, the execSQL method lets you execute
                    any valid SQL statement on your database tables, should you want to execute these (or any other)
                    operations manually.
                    <b>Any time you modify the underlying database values, you should update your Cursors by running a
                        new query.</b>
                </p>
                <p>To create a new row, construct a <a href="http://developer.android.com/reference/android/content/ContentValues.html">

                        ContentValues</a> object and use its put methods to add name/value
                    pairs representing each column name and its associated value.
                    Insert the new row by passing the Content Values into the insert method called on the target
                    database — along with the table name</p>
                <h3>Updating a row</h3>
                <p>Updating rows is also done with Content Values. Create a new ContentValues object, using the
                    put methods to assign new values to each column you want to update. Call the update method on
                    the database, passing in the table name, the updated Content Values object, and a where clause that
                    specifies the row(s) to update.</p>
                <h3>Deleting a row</h3>
                <p>To delete a row, simply call the delete method on a database, specifying the table name and a
                    where clause that returns the rows you want to delete</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Content Providers</h2>
                <p>ContentProviders (extention of <a href="http://developer.android.com/reference/android/content/ContentProvider.html">ContentProvider</a>)
                    provide an interface for publishing data that will be consumed using a Content
                    Resolver. They allow you to decouple the application components that consume data from their
                    underlying data sources, providing a generic mechanism through which applications can share their
                    data or consume data provided by others.</p>
                <p>You will also need to override the onCreate handler to initialize the underlying data source, as well
                    as the query, update, delete, insert, and getType methods to implement the interface used by
                    the Content Resolver to interact with the data</p>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practices</div>
                    <div class="panel-body">
                        Like the database contract class described in the previous section, it’s good practice to include static
                        database constants — particularly column names and the Content Provider authority — that will be
                        required for transacting with, and querying, the database.
                    </div>
                </div>
                <h3>Registering Content Providers</h3>
                <p>Like Activities and Services, Content Providers must be registered in your application manifest
                    before the Content Resolver can discover them. This is done using a provider tag that includes a
                    name attribute describing the Provider’s class name and an authorities tag.</p>
                <p>Use the authorities tag to define the base URI of the <b>Provider’s authority</b>. A Content Provider’s
                    authority is used by the Content Resolver as an address and used to find the database you want to
                    interact with. </p>
                <div class="panel panel-primary">
                    <div class="panel-heading">Best Practices</div>
                    <div class="panel-body">
                        Each Content Provider authority must be unique, so it’s good practice to base the URI path on your
                        package name e.g., <b>com.&lt;CompanyName&gt;.provider.&lt;ApplicationName&gt;</b>
                    </div>
                </div>
                <pre class="prettyprint" lang="xml">
&lt;provider
       android:authorities="com.hogent.provider.testapplicatie"
       android:name=".contentprovider.TestContentProvider" &gt;
&lt;/provider&gt;
                </pre>

                <p>
                    Until Android version 4.2 a content provider is by default available 
                    to other Android applications. As of Android 4.2 a content provider 
                    must be explicitly exported.
                    To set the visibility of your content provider use the 
                    android:exported=false|true parameter in the declaration of 
                    your content provider in the AndroidManifest.xml file. 
                </p>
                <p>You can use a <a href="http://developer.android.com/reference/android/content/UriMatcher.html">UirMatcher</a>
                    to help you with the Uri matching. </p>
                <h2>Creating the Content Provider’s Database</h2>
                <p>To initialize the data source you plan to access through the Content Provider, override the onCreate
                    method. This is typically handled using an SQLite Open Helper implementation,
                    of the type described in the previous section, allowing you to effectively defer creating and
                    opening the database until it’s required.</p>
                <h3>Supporting queries</h3>
                <p>To support queries with your Content Provider, you must implement the query and getType
                    methods. Content Resolvers use these methods to access the underlying data, without knowing its
                    structure or implementation. These methods enable applications to share data across application
                    boundaries without having to publish a specific interface for each data source.
                    The most common scenario is to use a Content Provider to provide access to an SQLite database, but
                    within these methods you can access any source of data (including fi les or application instance variables).</p>
                <p>Having implemented queries, you must also specify a <b>MIME</b> type to identify the data returned.
                    Override the getType method to return a string that uniquely describes your data type.</p>
                <h3>Transactions</h3>
                <p>To expose delete, insert, and update transactions on your Content Provider, implement the
                    corresponding delete, insert, and update methods.</p>
                <p> When performing transactions that modify the dataset, it’s good practice to call the Content
                    Resolver’s <b>notifyChange method</b>. This will notify any Content Observers, registered for a given
                    Cursor using the Cursor.registerContentObserver method, that the underlying table (or a
                    particular row) has been removed, added, or updated.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Using Content Providers</h2>
                <h3>Introducing the Content Resolver</h3>
                <p>Each application includes a ContentResolver instance, accessible using the getContentResolver
                    method. When Content Providers are used to expose data, Content Resolvers are the corresponding class
                    used to query and perform transactions on those Content Providers. Whereas Content Providers
                    provide an abstraction from the underlying data, Content Resolvers provide an abstraction from the
                    Content Provider being queried or transacted.
                    The Content Resolver includes query and transaction methods corresponding to those defi ned
                    within your Content Providers. The Content Resolver does not need to know the implementation of
                    the Content Providers it is interacting with — each query and transaction method simply accepts a
                    URI that specifi es the Content Provider to interact with.</p>
                <p>
                    To retrieve data from a provider, follow these basic steps:</p>
                <ol>
                    <li>Request the read access permission for the provider.</li>
                    <li>Define the code that sends a query to the provider.</li>
                </ol>
                <p>To retrieve data from a provider, your application needs "read access permission" 
                    for the provider. You can't request this permission at run-time; instead, 
                    you have to specify that you need this permission in your manifest, 
                    using the &lt;uses-permission&g; element and the exact permission 
                    name defined by the provider. When you specify this element in your 
                    manifest, you are in effect "requesting" this permission for your 
                    application. When users install your application, they implicitly grant this request. </p>
                <p>

                    Using the query method on the ContentResolver object, pass in the following:</p>
                <ol>
                    <li>A URI to the Content Provider you want to query.</li>
                    <li>A projection that lists the columns you want to include in the result set.</li>
                    <li> A where clause that defi nes the rows to be returned. You can include ? wildcards that will be
                        replaced by the values passed into the selection argument parameter.</li>
                    <li> An array of selection argument strings that will replace the ? wildcards in the where clause.</li>
                    <li> A string that describes the order of the returned rows.</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Querying for Content Asynchronously Using the Cursor Loader</h2>
                <p>Database operations can be time-consuming, so it’s particularly important that any database and
                    Content Provider queries are not performed on the main application thread.</p>
                <h3>Loaders</h3>
                <p>Loaders are available within every Activity and Fragment via the LoaderManager. They
                    are designed to asynchronously load data and monitor the underlying data source
                    for changes.
                    While loaders can be implemented to load any kind of data from any data source, of particular
                    interest is the CursorLoader class. The Cursor Loader allows you to perform asynchronous
                    queries against Content Providers, returning a result Cursor and notifi cations of any updates to the
                    underlying provider. Moreover: </p>
                <ul>
                    <li>They are available to every Activity and Fragment.</li>
                    <li>They provide asynchronous loading of data.</li>
                    <li>They monitor the source of their data and deliver new results when the content changes.</li>
                    <li>They automatically reconnect to the last loader's cursor when 
                        being recreated after a configuration change. Thus, they don't need to re-query their data.</li>
                </ul>
                <h3>Implementing CursorLoaders</h3>
                <p>To use a Cursor Loader, create a new <a href="http://developer.android.com/reference/android/app/LoaderManager.LoaderCallbacks.html">LoaderManager.LoaderCallbacks</a>
                    implementation. Loader
                    Callbacks are implemented using generics, so you should specify the explicit type being loaded, in
                    this case Cursors, when implementing your own.</p>
                <pre class="prettyprint" lang="java">
LoaderManager.LoaderCallbacks&lt;Cursor&gt; loaderCallback = new LoaderManager.LoaderCallbacks&lt;Cursor&gt;() {                    
                </pre>
                <p> You should implement the following methods</p>
                <ul>
                    <li> onCreateLoader(int id, Bundle args) : instantiate and return a new Loader for the given ID.  </li>
                    <li> onLoadFinished(Loader&lt;D&gt; loader, D data) : Called when a previously created loader has finished its load.  </li>
                    <li> onLoadFinished(Loader&lt;D&gt; loader, D data): Called when a previously created loader has finished its load.  </li>
                </ul>
                <h3> Starting a Loader </h3>
                <p>The LoaderManager manages one or more Loader instances within an Activity or Fragment. 
                    There is only one LoaderManager per activity or fragment.
                    You typically initialize a Loader within the activity's onCreate() 
                    method, or within the fragment's onActivityCreated() method. You do this as follows:</p>
                <pre class="prettyprint" lang="java">
// Prepare the loader.  Either re-connect with an existing one,
// or start a new one.
getLoaderManager().initLoader(0, null, this);                 
                </pre>
                <ul>
                    <li>A unique ID that identifies the loader. In this example, the ID is 0.</li>
                    <li>Optional arguments to supply to the loader at construction (null in this example).</li>
                    <li>A LoaderManager.LoaderCallbacks implementation, which the LoaderManager calls to 
                        report loader events. In this example, the local class implements the LoaderManager.LoaderCallbacks interface, so it 
                        passes a reference to itself, this.</li>
                </ul>
                <p>If a loader corresponding to the identifier used doesn’t already exist, it is created within the associated
                    Loader Callback’s onCreateLoader handler as described in the previous section.
                    In most circumstances this is all that is required. The Loader Manager will handle the lifecycle of
                    any Loaders you initialize and the underlying queries and cursors. Similarly, it will manage changes
                    to the query results.</p>
                <p> A complete example can be found <a href="http://developer.android.com/guide/components/loaders.html">here</a></p>
            </div>
        </div>
    </div>
</article>