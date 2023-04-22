<?php

namespace app\controllers;

use yii\web\Controller;

class DemoController extends Controller
{
    public function actionHello()
    {
        $comms = [
            "My Lord is epic!",
            "ILU my Lord!!!",
            "Oh my Lord..",
            "You're unbelievable",
        ];
        return $this->render("hello", ['comms' => $comms, 'name' => 'my Lord']);
    }

    public function actionBye()
    {
        return "Bye!";
    }
}