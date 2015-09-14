
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Applications and Activities';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <h1>Creating Applications and Activities</h1>

    <p>This lesson covers the fundamental building blocks needed to create Android 
        applications. A thorough understanding of these components is necessary in order
        to compile efficients and succesful native Android applications. </p>  

    <div class="all-sections">
        <h2 id="section-one">The Android application life cycle</h2>

        <p>Unlike many traditional application platforms, Android applications have limited control over their
            own lifecycles. Instead, application components must listen for changes in the application state and
            react accordingly, taking particular care to be prepared for untimely termination.</p>
        <p>By default, each Android application runs in its <b>own process</b>, each of which is running a separate
            instance of Dalvik. Memory and process management is handled exclusively by the run time.</p>
        <p>Android aggressively manages its resources, doing whatever’s necessary to ensure a smooth and
            stable user experience. In practice that means that processes (and their hosted applications) <b>will be
                killed, in some case without warning</b>, to free resources for higher-priority applications.</p>


    </div>
</article>