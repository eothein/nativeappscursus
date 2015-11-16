
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'SQLLite for you diary';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Diary Application </h1>

            <p>In this lesson we are going to create an application
                which will keep track of our diary. We will be able to 
                create diary entries which we can see.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Seperate Database Package</h2>
                <p>We are going to work modular. For this we are going
                    to generate a persistence package, containing the following
                    classes:</p>
                <ul>
                    <li>MyDB.java : contains the SQLLitedatabase and a 
                        MyDBHelper class</li>
                    <li>MyDBHelper.java : an extention of SQLiteOpenHelper 
                        which will manage the database</li>
                    <li>Constants.java : the string constants used by the database</li>
                </ul>
                <h3>MyDB.java</h3>
                <p>This should containt the following methods</p>
                <ul>
                    <li>opene() - initialises a SQLiteDatabase using the
                        MyDBHelper class. This should open a writeable database
                        if possible, and a readable if not. </li>
                    <li>close() - closes the database</li>
                    <li>insertDiary - inserts a diary element into the databse</li>
                    <li>getDiaries() - returns all the diary entries from the 
                        database</li>
                </ul>
                <h3>MyDBHelper</h3>
                <p>This is an extention of the SQLiteOpenHelper which manages access to the 
                    database. You can use the following code to generate the database.</p>
                <pre class="prettyprint" lang="SQL">
CREATE TABLE tableName ( key id integer primary key autoincrement t i t l e t ext
not null , cont ent t ext not null , recordDate long ) ;                   
                </pre>
                <h2 id="section-two">ContentProvider</h2>
                <p>Each application is a sandbox where data is per definiton
                    unaccessble. If you want you data to be accessible by other
                    applications, you'll have to provide a ContentProvider. This
                    servers as a bridge between different applications and makes
                    sure data is interchangeable among apps. You get access
                    to a ContentProvider by implementing a ContentResolver.</p>
                <h3>Define the ContentProvider</h3>
                <p>To access the data from the database, we will write our own
                    ContentProvider (DiaryConentProvider). Our class shoudl extend ContentProvider and 
                    implements the following methods:</p>
                <ul>
                    <li>query() - access the data</li>
                    <li>insert() - insert the data</li>
                    <li>update() - update data</li>
                    <li>delete() - delete the data</li>
                    <li>getType() - allows to interpret the URI</li>
                    <li>onCreate() - generates the database </li>
                </ul>
                <p>Make sure you make use of an UriMatcher to interpret the 
                    URI's. </p>
            </div>


        </div>
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-three">Adding a diary entry</h2>
                <p>Create an activity (or even better a Fragment) to add an element to 
                    the database. It should like the figure next to this paragraph. Implement
                    a method SaveToDB which makes use of a ContentResolver to insert
                    the give data in the database. Make sure you validate the entry.</p>
            </div>
            <div class="col-sm-2">
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

                echo Html::a(Html::img('@web/images/sqllite/addDiaryEntry.png', ['alt' => 'Add diart',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/sqllite/addDiaryEntry.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-four">Display the diary entries</h2>
                <p>Extends a ListActivity to show the diary entries. For this 
                    we need to implement a DiaryAdapter which extends the BaseAdapter.
                    It expexts a ListView with id list. Secondly, Implement the necessary methods
                    which will download the data 
                    assynchronously (using a CursorLoader). </p>
            </div>
            <div class="col-sm-2">
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

                echo Html::a(Html::img('@web/images/sqllite/listEntries.png', ['alt' => 'List diaries',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/sqllite/listEntries.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-five">DiaryEntry</h2>
                <p>Generate an Acitivty or Fragemnt to show
                    the details of a Diary Entry. </p>
            </div>
            <div class="col-sm-2">
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

                echo Html::a(Html::img('@web/images/sqllite/displayEntry.png', ['alt' => 'Display entry',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/sqllite/displayEntry.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

    </div>

</article>