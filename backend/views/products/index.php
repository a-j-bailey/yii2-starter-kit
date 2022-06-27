<?php

use yii\helpers\Html;
use yii\grid\GridView;

// sets title for page
$this->title = 'Product Overview';

?>

<div class="products-index">
    <div class="card">
        <div class="card-header">
            <?php echo Html::a('Add New Product', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="card-body">
            <?php echo GridView::widget([
                'layout' => "{items}\n{pager}",
                'options' => [
                    'class' => ['gridview', 'table-responsive'],
                ],
                'tableOptions' => [
                    'class' => ['table', 'text-nowrap', 'table-striped', 'table-bordered', 'mb-0'],
                ],
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'name:ntext',
                    'quantity',
                    'price',
                    
                    ['class' => \common\widgets\ActionColumn::class],
                ],
            ]); ?>
        </div>
    </div>
</div>