<?php

/**
 * @var yii\web\View $this
 * @var app\models\Customers $model
 */

$this->title = 'Create Customers';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="customers-create">

    <?php 
    
    
    echo $this->render('_form', [
        'model' => $model,
        'data' => $data
    ])
    

/*
    echo Select2::widget([
        'model' => $model,
        'attribute' => 'state_2',
        'data' => $data,
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
*/    
    ?>

</div>
