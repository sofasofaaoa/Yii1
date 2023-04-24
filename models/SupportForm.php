<?php

namespace app\models;

use yii\base\Model;

class SupportForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            [['email'], 'email'],
        ];

    }
}