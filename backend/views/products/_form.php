<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>

<div class="products-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-body">
                <?php echo $form->field($model, 'name')->textarea(['rows' => 1]) ?>
                <?php echo $form->field($model, 'accessories')->textarea(['rows' => 4]) ?>
                <?php echo $form->field($model, 'quantity')->textarea(['rows' => 1]) ?>
                <?php echo $form->field($model, 'price')->textarea(['rows' => 1]) ?>
            </div>
            <div class="card-footer">
                <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php $form = ActiveForm::end(); ?>
</div>