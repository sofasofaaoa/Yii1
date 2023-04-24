<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'message')->textarea() ?>

<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

<p><?= $m; ?></p>
