<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Testing and customizing';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Be a detective!</h1>
            This app records the details of petty crimes – 
            things like leaving dirty dishes in the breakroom
            sink or walking away from a dirty class room ...
            You can make a record of a crime including a title, 
            a date, and a photo. You can also identify a suspect 
            from your contacts and lodge a complaint via email, 
            Twitter, Facebook, or another app. After documenting and 
            reporting a crime, you can proceed with your work free 
            of resentment and ready to focus on the business at hand. 
            We will start with a basic implementation and make changes to it
            with all techniques we have covered in this couse. 
            The basic implementation is based on the following book: 
            <a href="https://www.bignerdranch.com/we-write/android-programming/">Android Programming: The big nerd ranch guide</a>.
            <p> There are two ways of making this excercise (which is up to you):<p>
            <ol>
                <li>Either you import the project and apply the changes in the
                    project.</li>
                <li>Generate a new project, and use the base project as a reference. </li>
            </ol>

        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Basic implementation</h2>

                <p>In Chamilo you can find a basic implementation for this application. 
                    You can play with it to get a feel of it. </p>


                <h2 id="section-two">Apply Green DAO</h2>

                <p>The implementation provided uses a SQLite database which of course
                    is fine. But we can do better: change the <b>SQLite</b> implementation
                    to an implementation using <b>GreenDAO</b>. 
                </p>
                <p>
                    Secondly, the application does not provide a way to delete existing
                    crimes. Make sure your implementation is able to delete existing 
                    crimes. The way the user deletes items, is by swiping the item in the
                    recyclerview to right. 
                </p>
                <h2 id="section-three">Apply Butterknife</h2>

                <p>The implementation provided uses makes extensive use of findViewById.
                    Import butterknife and apply it where necessary. 
                </p>
                <h2 id="section-four">Picking a contact and a photo</h2>

                <p>The implementation provided does not contain the functionality
                    to take a photo, choose one of your contacts as the culprit
                    or to send a report using email or social media. In this excercise
                    you will have to implement that functionality.
                </p>
                <h2 id="section-five">Apply Picasso</h2>
                <p>Taking a photo of the crime is a nice feature, although lot 
                    of the processing is done by the application itself. Use one of the
                    image libraries (Picasso, Glide, Universal Image Loader ...) to do this
                    work for us.</p>
                <h2 id="section-five">Testing</h2>
                <p>This application is far from complete, but to add extra functonality it would
                    be a good idea to generate tests, so that this basic functionality keeps 
                    on working in future releases. Implement tests (using JUnit of RoboElectric) for
                    the following functionality:</p>
                <ul>
                    <li>Screen orientation changes: 
                        <ul>
                            <li>
                                Is the screen re-drawn correctly? Any custom UI code you have should handle changes in the orientation.
                            </li>
                            <li>
                                Does the application maintain its state? The Activity
                                should not lose anything that the user has already
                                entered into the UI. The application should not forget
                                its place in the current transaction. 
                            </li>
                        </ul>
                    </li>

                    <li>Verify that all button functionality works as supposed to. </li>
                    <li>Verifying that the launched Intents contains the correct payload data.</li>
                    <li><b>Not required for exam (optionally)</b>Verify that all database operations work</li>
                </ul>

            </div>
        </div>
</article>
