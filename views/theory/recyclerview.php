
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'User interfaces : part1';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>RecyclerView and CardViews</h1>

            <p>f you are interested in building an Android app that makes use of lists to display data, 
                Android Lollipop features two new widgets to make your life easier, RecyclerView and CardView. 
                Using these widgets, it is very easy to give your app a look and feel that conforms to the guidelines 
                mentioned in Google's material design specification.</p>  
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
            echo Html::a(Html::img('https://developer.android.com/design/material/images/card_travel.png', ['alt' => 'Android versions',
                        'width' => '100%',
                        'class' => "img-responsive"]), 'https://developer.android.com/design/material/images/card_travel.png', ['rel' => 'fancybox']);
            ?>

        </div>

    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-8">
                <h2 id="section-one">RecyclerView</h2>
                <p>The RecyclerView is a new ViewGroup that is prepared to render 
                    any adapter-based view. It is supposed to be the successor of ListView 
                    and GridView, and it can be found in the latest support-v7 version. 
                    One of the reasons is that RecyclerView has a more extensible framework, 
                    especially since it provides the ability to implement both horizontal 
                    and vertical layouts. Use the RecyclerView widget when you have data 
                    collections whose elements change at runtime based on user action or network events.</p>
                <p>To use a recyclerview, you will need the following things:</p>
                <ul>
                    <li>RecyclerView.Adapter - To handle the data collection and bind it to the view</li>
                    <li>LayoutManager - Helps in positioning the items</li>
                    <li>ItemAnimator - Helps with animating the items for common operations such as Addition or Removal of item</li>
                </ul>
                <p>The main differences between a ListView and a RecyclerView can be viewed 
                    <a href="http://www.truiton.com/2015/03/android-recyclerview-vs-listview-comparison/">here</a></p>
            </div>

            <div class="col-sm-4">
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
                echo Html::a(Html::img('https://developer.android.com/training/material/images/RecyclerView.png', ['alt' => 'Android versions',
                            'width' => '100%',
                            'class' => "img-responsive"]), 'https://developer.android.com/training/material/images/RecyclerView.png', ['rel' => 'fancybox']);
                ?>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-two">Components and workflow</h2>
                <h3>LayoutManagers</h3>
                <p>A RecyclerView needs to have a layout manager and an adapter to be instantiated. 
                    A layout manager positions item views inside a RecyclerView and determines 
                    when to reuse item views that are no longer visible to the user.</p>

                <p>RecyclerView provides these built-in layout managers:</p>
                <ul>
                    <li>LinearLayoutManager shows items in a vertical or horizontal scrolling list.</li>
                    <li>GridLayoutManager shows items in a grid.</li>
                    <li>StaggeredGridLayoutManager shows items in a staggered grid.</li>
                </ul>

                <h3>RecyclerView.Adapter</h3>
                <p>RecyclerView includes a new kind of adapter. It’s a similar approach to 
                    the ones you already used, but with some peculiarities, such as a required 
                    ViewHolder. You will have to override two main methods: one to 
                    inflate the view and its view holder, and another one to bind 
                    data to the view. The good thing about this is that first method 
                    is called only when we really need to create a new view. No need 
                    to check if it’s being recycled.</p>

                <h3>ItemAnimator</h3>
                <p>RecyclerView.ItemAnimator will animate ViewGroup modifications 
                    such as add/delete/select that are notified to adapter. 
                    DefaultItemAnimator can be used for basic default animations 
                    and works quite well.</p>

                <h3>Using the RecyclerView</h3>
                <ol>
                    <li>Add RecyclerView support library to the gradle build file</li>
                    <li>Define a model class to use as the data source</li>
                    <li>Add a RecyclerView to your activity to display the items</li>
                    <li>Create a custom row layout XML file to visualize the item</li>
                    <li>Create a RecyclerView.Adapter and ViewHolder to render the item</li>
                    <li>Bind the adapter to the data source to populate the RecyclerView </li>
                </ol>

            </div>
        </div>
    </div>
</article>