<?php

/**
 * @var yii\web\View $this
 * @var app\models\Companies $model
 */

$this->title = 'Create Companies';
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
