<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Customers $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">
    <div class="card">
        <div class="card-header">
            <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
            <button class="hello-world">Hello World</button>
        </div>
        <div class="card-body">
            <?php echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'first_name:ntext',
                    'last_name:ntext',
                    'birthday',
                    'full_address:ntext',
                    'company_id',
                    
                ],
            ]) ?>
        </div>
    </div>
    <script>
        

    </script>
</div>

<?php $this->registerJsFile(
    '@web/js/helloWorld.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
); ?>