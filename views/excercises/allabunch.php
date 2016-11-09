
<?php

use app\assets\TocAsset;
use yii\helpers\Html;
use yii\helpers\Url;

TocAsset::register($this);
$this->title = 'Some excercices';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Some excercices</h1>

            <p>On today's menu: recyclerview and persistency</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Excercise 1 : finish the game of thrones application</h2>
                <ul>
                    <li>Add functionality which is able to delete an item from the list</li>
                    <li>Test the extra functionality</li>
                    <p>
                        Use <?php echo Html::a('this link', 
                                Url::to('https://classroom.github.com/assignment-invitations/8e99d9e246f9b5cd126e22b9d6a4e6b9', true), ['class' => 'btn btn-primary']);
?>
                    </p>
                </ul>
            </div>
            <div class="col-sm-8">
                <h2 id="section-one">Excercise 2 : create a version of "Who is it" </h2>
                <p>Use the descriptions and photo's of your classmates which
                    you can find on Chamilo under document. Make sure the applications
                    abides the following constraints:</p>
                <ul>
                    <li>The game shoul be able to be played in portrait and in
                        landscape mode.</li>
                    <ul>
                        <li>Portrait mode should only contain a recyclerview
                            with a small description of the student. The should
                            be able to be swiped out. Pressing a student should
                            show a new fragment with the studen's description</li>
                        <li>Landscape mode should containt the list
                            plus the description of the student. Swiping again 
                            deletes the student.</li> 
                    </ul>
                    <li>You should be able to restart the gam.</li>
                    <li>Make use of recyclerviews, sqlite and make sure
                        you apply the give best practices. </li>
                </ul>
                    <p>
                        Use <?php echo Html::a('this link', 
                                Url::to('https://classroom.github.com/assignment-invitations/aefd8f4107d71ed3b60447d308c8f84a', true), ['class' => 'btn btn-primary']);
?>
                    </p>
            </div>
            <div class="col-sm-4">
                <?php echo Html::img("http://www.calendars.com/img/p/orig/201100011556.jpg",["class"=>'img-responsive']) ?>
            </div>
        </div>
    </div>



</article>