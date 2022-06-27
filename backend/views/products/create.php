<?php

/**
 * @var yii\web\View $this
 * @var app\models\Companies $model
 */

$this->title = 'Add New Product';
?>

<div class="products-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
