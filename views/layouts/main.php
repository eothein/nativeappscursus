<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use kartik\nav\NavX;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            $options = [
                'class' => 'navbar-inverse navbar-fixed-top',
                'brandLabel' => 'University College Ghent',
                'brandUrl' => 'http://www.hogent.be',
            ];

            $items = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About this course', 'url' => ['/site/about']],
                ['label' => 'Theory lessons', 'items' => [
                        ['label' => 'Hello Android', 'url' => ['/theory/hello']],
                        ['label' => 'Activities', 'url' => ['/theory/activities']],
                        ['label' => 'User Interfaces 1', 'url' => ['/theory/userinterfaces1']],
                        ['label' => 'User Interfaces 2', 'url' => ['/theory/userinterfaces2']],
                        ['label' => 'Fragments and what not', 'url' => ['/theory/fragments']],
                        ['label' => 'Intents', 'url' => ['/theory/intents']],
                        ['label' => 'RecyclerView', 'url' => ['/theory/recyclerview']],
                        ['label' => 'Persistency', 'url' => ['/theory/persistency']],
                        ['label' => 'Persistency with SQLite', 'url' => ['/theory/persistency2']],
                        ['label' => 'Network & Services', 'url' => ['/theory/services']],
                        ['label' => 'Testing', 'url' => ['/theory/testing']],
                    ]],
                ['label' => 'Excercises', 'items' => [
                        ['label' => 'Hello Android', 'url' => ['/excercises/hello']],
                        ['label' => 'Activities', 'url' => ['/excercises/activities']],
                        ['label' => 'User Interfaces 1', 'url' => ['/excercises/fooi']],
                        ['label' => 'User Interfaces 2', 'url' => ['/excercises/ui1']],
                        ['label' => 'User Interfaces 3', 'url' => ['/excercises/ui2']],
                        ['label' => 'A bunch of excercices', 'url' => ['/excercises/allabunch']],
                    //['label' => 'Fragments', 'url' => ['/excercises/fragments']],
                        ['label' => 'Intents', 'url' => ['/excercises/intents']],
                    //['label' => 'Recyclerview', 'url' => ['/excercises/recyclerview']],
                    //['label' => 'SqlLite', 'url' => ['/excercises/sqllite']],
                    //['label' => 'Network & Services', 'url' => ['/excercises/services']],
                    //['label' => 'Testing and GreenDAO', 'url' => ['/excercises/testing']],
                    ]],
                ['label' => 'Bachelorpapers', 'url' => ['/bachelorpaper/index']],
            ];


            NavBar::begin($options);
            echo NavX::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => $items,
                'activateParents' => true,
                'encodeLabels' => false
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; University college Ghent <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
