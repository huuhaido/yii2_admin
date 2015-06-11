<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Adminmenu */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Adminmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminmenu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'rank',
            'properties_new',
            'category',
            'type',
            'description',
            'content',
            'image',
            'link_url:url',
            'left_right',
            'status',
            'created',
            'updated',
        ],
    ]) ?>

</div>
