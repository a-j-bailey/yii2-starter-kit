<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Customers $model
 * @var yii\bootstrap4\ActiveForm $form
 */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>
    <?php echo $form->field($model, 'first_name') ?>
    <?php echo $form->field($model, 'last_name') ?>
    <?php echo $form->field($model, 'birthday') ?>
    <?php echo $form->field($model, 'full_address') ?>
    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton('Reset', ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
