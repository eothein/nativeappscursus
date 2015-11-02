<?php

namespace app\controllers;

use yii\web\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TheoryController
 *
 * @author Jens Buysse
 */
class TheoryController extends Controller {

    //put your code here

    public function actionHello() {
        return $this->render('helloandroid');
    }

    
    public function actionActivities(){
        return $this->render('activities');
    }
    
    public function actionUserinterfaces1(){
        return $this->render('userinterfaces1');
    }
    
    public function actionUserinterfaces2(){
        return $this->render('userinterfaces2');
    }
    
    public function actionFragments(){
        return $this->render('fragments');
    }
    
    public function actionIntents(){
        return $this->render('intents');
    }
    
        public function actionRecyclerview(){
        return $this->render('recyclerview');
    }
            
}
