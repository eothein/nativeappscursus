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
class ExcercisesController extends Controller {

    //put your code here

    public function actionHello() {
        return $this->render('helloandroid');
    }

    public function actionActivities() {
        return $this->render('activities');
    }

    public function actionUi1() {
        return $this->render('ui1');
    }

    public function actionUi2() {
        return $this->render('ui2');
    }
    
    public function actionFragments(){
        return $this->render('fragments');
    }
    
    public function actionIntents(){
        return $this->render("intents");
    }

}
