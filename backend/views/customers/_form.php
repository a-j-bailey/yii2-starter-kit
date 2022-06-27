<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Customers $model
 * @var yii\bootstrap4\ActiveForm $form
 */
?>

<div class="customers-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-body">
                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->field($model, 'first_name')->textarea(['rows' => 1]) ?>
                <?php echo $form->field($model, 'last_name')->textarea(['rows' => 1]) ?>
                <?php echo $form->field($model, 'birthday')->textInput() ?>
                <?php echo $form->field($model, 'full_address')->textarea(['rows' => 4]) ?>
                <?php echo $form->field($model, 'company_id')->dropDownList($data) ?>
                
            </div>
            <div class="card-footer">
                <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
