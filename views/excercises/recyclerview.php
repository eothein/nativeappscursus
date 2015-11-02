
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Using the recyclerview';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Using the Recylcerview </h1>

            <p>In this lesson we are goint to create an application which will 
                help us to keep track of the characters of the popular show
                Game Of Thrones. It will display a customizable list of Characters.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-one">Adding the support library</h2>
                <p>
                    The main Activity of our new project will consist entirely of a Fragment with a RecyclerView nested
                    inside the root Layout, and is very quick and simple to construct. However, similar
                    to the CardView, it is new to Android 5 and therefore, a part of the V7 Support
                    Libraries and also, one of the Gradle build files will need to be modified, for it to
                    work.
                </p>
                <ul>
                    <li>Open the Gradle script file, build.gradle (Module app) and add the
                        lastest RecylcerView and Cardview dependencies.</li>
                    <li>Create an acitvity with a Fragment containing a RecylerView</li>           
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-two">Adding the CardView</h2>
                <p>
                    Our Recycler list will be comprised of 
                    <a href="https://developer.android.com/reference/android/support/v7/widget/CardView.html">CardViews</a>, each conforming to the layout that
                    we will design next. Design a card layout similar to those in the image next, with the following
                    component structure and IDs.
                </p>
                <ul>
                    <li>Imageview with name android:id="@+id/card_image</li>
                    <li>TextView with name android:id="@+id/card_name"</li>           
                </ul>
                <p>Try to use textAppearanceSmall and textAppearanceLarge to set the text size.
                    This is often preferable to using specific dp amounts, as these settings automatically
                    adjust to suit the size of the user's screen.</p>
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

                echo Html::a(Html::img('@web/images/recyclerview/cardviewlayout.png', ['alt' => 'Android versions',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/recyclerview/cardviewlayout.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-three">Adding a LayoutManager</h2>
                <p>Views are positioned in the RecyclerView by a RecyclerView.LayoutManager,
                    which in turn communicates with a RecyclerView.Adapter, and this binds our data
                    to our views. First, let's set up a LayoutManager.</p>
                <ul>
                    <li>Define the class variables (mRcyclerView and a mLayoutManager)</li>
                    <li>Instantiate and find the variables in the onCreateView method of your Fragment</li>
                    <li>Connect both objects</li>
                </ul>
                <p>Giving the RecyclerView a LayoutManager is as simple as declaring a new
                    LinearLayoutManager, passing it the current context and using RecyclerView.
                    setLayoutManager() to set the connection. The LayoutManager can be thought of
                    as belonging to the RecyclerView and it is the view's way of communicating with the
                    data adapter, which in turn accesses a dataset.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">Creating the domain objects and the data</h2>
                <p>We need to create the domain objects for our project. Here these
                    are the CharacterDescriptions. Make sure you have the following properties.</p>
                <ul>
                    <li>An image id</li>
                    <li>A Character name</li>
                    <li>A short Description of the Character</li>
                </ul>
                <p>Generate a data class containing some of the characterdesription data. It should 
                    contain the following arrays (provided you have the figures downloaded and in 
                    the correct directory). Description etc. can be found <a href="http://www.hbo.com/game-of-thrones/cast-and-crew/"> here</a></p>
                <ul>
                    <li>characterPictures</li>
                    <li>characterNames</li>
                    <li>characterDetails</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10">
                <h2 id="section-four">Creating the adapter</h2>
                <p>The RecyclerView.Adapter is responsible for binding our data to our views. We
                    control how this happens through another RecyclerView sub-class, the ViewHolder,
                    which we will create inside our Adapter. This can be achieved by following these steps:</p>
                <ol>
                    <li>Create a new Java class alongside the others in our project called MainAdapter,
                        extending RecyclerView.Adapter&lt;MainAdapter.MainViewHolder&gt;</li>
                    <li>Add a list with your dataelements</li>
                    <li>Define an innter class MainViewHolder </li>
                    <li>Let Android studio implement the necessary methods (Android studio will start complaining)</li>
                    <ul>
                        <li>onCreateViewHolder</li>
                        <li>onBindViewHolder</li>
                        <li>getItemCount</li>
                    </ul>
                    <li>Implement the MainViewHolder class. This contains the views each item in the list should have,
                        so you should referene them correctly in the constructor.</li>
                    <li>Complete the onCreateViewHolder() method. This is called when RecyclerView needs a 
                        new RecyclerView.ViewHolder of the given type to represent an item.
                        This new ViewHolder should be constructed with a new View that can represent 
                        the items of the given type. You can either create a new View manually 
                        or inflate it from an XML layout file. We have defined our cardView and it is this 
                        we are going to use.</li>
                    <li>Then, implement the onBindViewHolder() method: called by RecyclerView to display 
                        the data at the specified position. This method should update the contents 
                        of the itemView to reflect the item at the given position. Here we can use the data
                        in the dataclass.</li>
                    <li>Make sure that when the Fragment is created, we initialise the List with the 
                        Characters which will later be passed on to the Adapter.</li>
                </ol>
                <p>After implementing everying correctly, you should be able to view the list as shown on 
                    the right.</p>
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

                echo Html::a(Html::img('@web/images/recyclerview/list.png', ['alt' => 'Android versions',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/recyclerview/list.png', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-five">Creating the OnClickListener</h2>
                <p>Before we create our new Activity, we need an OnClickListener that can tell which
                    CardView was clicked on.</p>
                <p>There are several (elaborated) ways of doing this, and depending on the context
                    you can choose which one to use. See <a href="http://stackoverflow.com/questions/24471109/recyclerview-onclick/26196831#26196831">
                        this</a> for some examples.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-six">Creating the details for the character</h2>
                <p>When a list item is clicked, the user should see anoter activity (or fragment)
                with the image, the name and the description of the character. By now,
                you should be able to do this yourself. </p>
            </div>
        </div>


    </div>

</article>