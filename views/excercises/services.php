<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Services and the network';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Services and the network </h1>

            <p>In this lesson we are going to create an application
                which will help us browse the popular Reddit Web-site.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Description</h2>
                <p>Reddit  is an entertainment, social networking, and news website 
                    where registered community members can submit content, 
                    such as text posts or direct links. To see it click <a href="https://www.reddit.com/">here</a></p>
                <p>One can browse using a conventional browser, but there is also the possebility
                    to make use of the Reddit api which you can find <a href="https://www.reddit.com/dev/api">here</a> </p>
                <p>Essentially, surfing to <a href="https://reddit.com/r/funny.json">https://reddit.com/r/funny.json</a>
                    provides you a JSON file with a lot of stuff. We are of course only intereseted in the content, such as the
                    title, author, link, thumbnail, figure ... </p>
                <h2 id="section-one">Assignment</h2>
                <p>The excercise is to make an application with the following components: </p>
                <ul>
                    <li>Make an application with a Drawerlayout (you can use the one out of the box
                        of android studio. This contains a nice header and underneath some of the basics 
                        reddit listings (called subreddits). E.g. funny, pics, ... (at least 6)</li>
                    <li> The main content of the application should contain a list 
                        where the posts of the subreddit are displayed. Pressing one of the 
                        posts should open a new Fragment/Activity with a full screen description of the post.</li>
                    <li>The toolbar should contain a refresh button, which refreshes the posts. </li>
                </ul>
                <p>On top of that, you should provide the following possebilities.</p>
                <ol>
                    <li>If the app is closed and reopened, you see the previous version
                        of the subreddit (so not the current). You should be able to look in the last downloaded state and 
                        only see the current version
                        if  refresh is pressed. (This means using a Database). 
                    </li>
                    <li>When scrolling the list, you don't download all the posts immediately (of course,
                        there is a large amount of posts available). You should provide a feature where when
                        you are at the end of the list, you automatically download the next batch of posts. The reddit
                        API makes this possible by making use of the after and before attributes in the url. Implementing
                    this in android can be found using google.</li> 

                </ol>
                <p>You can of course provide extra features (for extra points)</p>
                <ul>
                    <li>Provide a settings module where I can choose how many posts I download
                        per batch... </li>
                    <li>Create a beautifull design for the applications</li>
                    <li>...</li>
                </ul>
                <h2 id="section-one">Tips</h2>
                <p>You can make use of the following tips</p>
                <ul>
                    <li>Check the structure of your JSON file. You can use PostMan from Chrome or use a <a href="http://jsonviewer.stack.hu/#https://reddit.com/r/funny.json">JSONViewer</a> </li>
                    <li>Use GSON to parse your JSON file. You can create your own deserializer to 
                        filter out all the unnecessary information from your JSON file. See e.g. <a href="http://www.javacreed.com/gson-deserialiser-example/">here</a></li>
                    <li>Although a recyclerview means a lot of boiler plate code, it will help you implements certain functionality</li>
                    <li>You can make use of a ORM to make your life easier working with
                        the database. A good suggestion is <a href="http://greendao-orm.com/documentation/introduction/">GreenDAO</a></li>
                    <li>Debuggin a database can be done as described <a href="http://stackoverflow.com/questions/18370219/how-to-use-adb-in-android-studio-to-view-an-sqlite-db">here</a></li>
                    <li>Make use of libraries to connect to the REST API. There is Volley and RetroFit at your disposal. When
                        using Volley it would be wise to create your own <a href="https://developer.android.com/training/volley/request-custom.html">request </a></li>
                    <li>Off course Butterknife easies your life</li>
                    <li>A nice library to make circle pictures is <a href="https://github.com/hdodenhof/CircleImageView">de.hdodenhof:circleimageview</a></li>
                    <li>....</li>
                </ul>
            </div>
        </div>
    </div>
</article>