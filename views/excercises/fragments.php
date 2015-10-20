
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Excercise Fragments';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Fragments</h1>

            <p>In this excercise we will create an application which will
                introduce us to the world of paradoxes. It will consist of a 
                list with paradox titles and when we select one of them 
                we will show some more information about it - hell we will
                show the explanantion about is. </p>
            <p>We are going to implement our app when
                it is used on a handset device it just display one fragment at a time 
                for a single-pane user interface. Conversely, we are going  to set fragments 
                side-by-side on a tablet which has a wider screen size to display more
                information to the user.</p>
            <p><b>When testing make sure you have two devices ready: a tablet emulator and a 
                phone emulator (e.g. Nexus 5 and Nexus 7 devices)</b></p>
                <p>You can download the list of paradoxes  <a href="/images/fragments/Paradoxes.java" download>here</a> </p>
                    
                
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <h1>Fragments</h1>

            <p>In this excercise we will create an application which will
                introduce us to the world of paradoxes. It will consist of a 
                list with paradox titles and when we select one of them 
                we will show some more information about it - hell we will
                show the explanantion about is. </p>
            <p>We are going to implement our app when
                it is used on a handset device it just display one fragment at a time 
                for a single-pane user interface. Conversely, we are going  to set fragments 
                side-by-side on a tablet which has a wider screen size to display more
                information to the user.</p>
            <p>The images below show how our app will look like</p>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <h4>Single pane Fragment 1</h4>
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

            echo Html::a(Html::img('@web/images/fragments/singlePane1.jpg', ['alt' => 'Basic UML diagram',
                        'width' => '100%',
                        'class' => "img-responsive"]), '@web/images/fragments/singlePane1.jpg', ['rel' => 'fancybox']);
            ?>

        </div>



        <div class="col-sm-4">
            <h4>Single pane Fragment 2</h4>
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

            echo Html::a(Html::img('@web/images/fragments/singlePane2.jpg', ['alt' => 'Basic UML diagram',
                        'width' => '100%',
                        'class' => "img-responsive"]), '@web/images/fragments/singlePane2.jpg', ['rel' => 'fancybox']);
            ?>

        </div>



        <div class="col-sm-4">
            <h4>Dual Pane</h4>
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

            echo Html::a(Html::img('@web/images/fragments/dualPane.jpg', ['alt' => 'Basic UML diagram',
                        'width' => '100%',
                        'class' => "img-responsive"]), '@web/images/fragments/dualPane.jpg', ['rel' => 'fancybox']);
            ?>

        </div>


    </div>


    <div class="all-sections">
        <div class="row">
            <div class="col-sm-6">
                <h2 id="section-one">Excercise 1 : starting the project</h2>
                <p>This project will have the following classes :</p>
                <ul>
                    <li><b>Constants</b> This file will contain the constants for this project. 
                        E.g. the TAGS for the different activities. </li>
                    <li><b>MainActivity</b> This is the starting activity of your project. </li>
                    <li><b>ParadoxDescriptionFragment</b> This fragment will contain the 
                        information about the paradox in question. </li>
                    <li><b>Paradoxes</b> This class will contain two arrays with the 
                        paradox names and the description of the paradoxes. </li>
                    <li><b>ParadoxListFragment</b> This fragment will contain a list
                        which hold the paradox names. Pressing one of those paradoxnames
                        will show us the information about that particular paradox. </li>
                    <li><b>OnParadoxSelectedListener</b> This interface must be implemented by the mainactivity
                        that contain this fragment to allow an interaction in this fragment to be communicated
                        to the activity and potentially other fragments contained in that
                        activity, i.e. pressing a paradox and seeing the description</li>
                </ul>
                <p>In the following (basic and very simple UML diagram) you can find 
                    the classes with some basic associations. </p>
            </div>
            <div class="col-sm-6">
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

                echo Html::a(Html::img('@web/images/fragments/fragments.jpg', ['alt' => 'Basic UML diagram',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/fragments/fragments.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <p>Of course we also need some resource files for the project. These are them:</p>
                <ul>
                    <li><b>layout/fragment_paradox_description.xml</b> The Layout for the paradox description</li>
                    <li><b>layout/fragment_paradox_list.xml</b> The Layout for the paradox list</li>
                    <li><b>layout/paradoxes.xml</b> The layout file for the mainactivity when in single pane mode</li>
                    <li><b>layout-large/paradoxes.xml</b> The layout file for the mainactivity when in dual pane mode</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Implementation notes for ParadoxDescriptionFragment</h2>
                <p>The flow for the Fragment is described below with some pointers you should
                    take care of. </p>
            </div>
            <div class="col-sm-12">
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

                echo Html::a(Html::img('@web/images/fragments/descriptionFlow.jpg', ['alt' => 'Flow for ParadoxDescriptionFragment',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/fragments/descriptionFlow.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Implementation notes for ParadoxListFragment</h2>
                <p>The flow for the Fragment is described below with some pointers you should
                    take care of. </p>
            </div>
            <div class="col-sm-12">
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

                echo Html::a(Html::img('@web/images/fragments/listFlow.jpg', ['alt' => 'ParadoxListFragment',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/fragments/listFlow.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Implementation notes for MainActivity</h2>
                <p>The flow for the MainActivity is described below with some pointers you should
                    take care of. </p>
            </div>
            <div class="col-sm-12">
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

                echo Html::a(Html::img('@web/images/fragments/mainFlow.jpg', ['alt' => 'ParadoxListFragment',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/fragments/mainFlow.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Fragment animations</h2>
                <p>During a fragment transaction you can define animations 
                    which should be used based on the Property Animation API 
                    via the setCustomAnimations() method. Look up how you could do this
                    and implement a sliding transition between two fragments. </p>
            </div>
        </div>
    </div>


</article>