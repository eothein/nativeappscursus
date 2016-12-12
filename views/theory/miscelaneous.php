
<?php

use app\assets\TocAsset;
use yii\helpers\Html;
use yii\helpers\Url;

TocAsset::register($this);
$this->title = 'Miscelaneous';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Miscelaneous</h1>

            <p>In this lesson we will see some best practices which will make
                coding in android easier to maintain.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-11">
                <h2 id="section-one">Model View Controller</h2>
                <p>
                    Java architectures for Android applications can be roughly
                    approximated in Model-View-Controller. In Android, 
                    Fragment and Activity are actually controller classes. 
                    On the other hand, they are explicitly part of the user interface,
                    hence are also views.</p>

                <p>For this reason, it is hard to classify fragments (or activities) as 
                    strictly controllers or views. It's better to let them stay in their 
                    own fragments package. Activities can stay in an activities 
                    package.</p>

                <p>Otherwise, the architecture can look like a typical MVC, with
                    a models package containing POJOs to be populated through the
                    JSON parser (e.g. GSON) with API responses, and a views 
                    package containing your custom Views, notifications, action
                    bar views, widgets, etc. Adapters are a gray matter, living
                    between data and views. However, they typically need to
                    export some View via getView(), so you can include the
                    adapters subpackage inside views.</p>


                <p>Some controller classes are application-wide and close to 
                    the Android system. These can live in a managers package. 
                    Miscellaneous data processing classes, such as 
                    "DateUtils", stay in the utils package. Classes that are r
                    esponsible for interacting with the backend stay in the 
                    network package.</p>

                <ul>
                    <li>network</li>
                    <li>models</li>
                    <li>managers</li>
                    <li>utils</li>
                    <li>fragments</li>
                    <li>views</li>
                    <ol>
                        <li>adapters</li>
                        <li>actionbar</li>
                        <li>widgets</li>
                        <li>notifications</li>
                    </ol>
                    <p>Got this information from : <?php echo Html::a('this link', 'https://github.com/futurice/android-best-practices'); ?>

                </ul>

                </p>
            </div>

            <div class="col-sm-12">
                <h2 id="section-one">Make use of dependencies manifests</h2>
                <p>
                    In your repository, make use of dependency manifests (like
                    your build.gradle) e.a. and don't put your dependencies, modules
                    build files e.a. under version control. Your repository will become
                    too large and unmaintainable.
                    A basic work flow should be:
                </p>
                <ol>
                    <li>Sync your project</li>
                    <li>Run dependency script</li>
                    <li>Build your application</li>
                    <li>Run your application</li>
                </ol>

            </div>
            <div class="col-sm-12">
                <h2 id="section-one">Secure shared preferences</h2>
                <p>While going through the projecten 3 code I found that
                    some students are using a cyphered way of storing elements
                    in the shared preferences. You could e.g. use:
                    <?php
                    echo Html::a('this link', 'https://github.com/sveinungkb/encrypted-userprefs');
                    ?>
                </p>
            </div>
            <div class="col-sm-12">
                <h2 id="section-two">Secure shared preferences</h2>
                <p>To make phishing attacks more conspicuous and less likely to 
                    be successful, minimize the frequency of asking for user credentials. 
                    Instead use an authorization token and refresh it.</p>
                <p>Where possible, don't store user names and passwords on the device.
                    Instead, perform initial authentication using the user name and password
                    supplied by the user, and then use a short-lived, service-specific authorization token.</p>
                <p>Services that are accessible to multiple applications should
                    be accessed using AccountManager. If possible, use the 
                    AccountManager class to invoke a cloud-based service and 
                    don't store passwords on the device.</p>
                <p>After using AccountManager to retrieve an Account, use 
                    CREATOR before passing in any credentials so that you 
                    do not inadvertently pass credentials to the wrong application.</p>
                <p>If credentials are used only by applications that you 
                    create, you can verify the application that accesses the 
                    AccountManager using checkSignature(). Alternatively, 
                    if only one application uses the credential, you might 
                    use a KeyStore for storage.
                    Using cryptography</p>
            </div>

           <div class="col-sm-12">
                <h2 id="section-three">Use the best practicess</h2>
                <p>In a lot of code I see that a lot of the best practices are not
                apllied</p>
                <ul>
                    <li>Working asynchronoysly when doing network transactions</li>
                    <li>Working asyncrhonously when doing Persistency operations</li>
                    <li>Not using fragments but only using activities</li>
                </ul>
                
           </div>
            

        </div>

    </div>

</article>