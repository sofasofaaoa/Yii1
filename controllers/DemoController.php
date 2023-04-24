<?php

namespace app\controllers;

use app\models\SupportForm;
use Yii;
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

    public function actionForm()
    {
        $model = new \app\models\SupportForm();
        $m = '';
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $m = "We'll text you!";
            }
        }

        return $this->render('../support/form', [
            'model' => $model,
            'm' => $m,
        ]);
    }
}