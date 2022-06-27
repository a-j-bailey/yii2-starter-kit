<?php

/**
 * @var yii\web\View $this
 * @var app\models\Customers $model
 */

$this->title = 'Update Customers: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customers-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
