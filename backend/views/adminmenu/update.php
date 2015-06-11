<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Adminmenu */

$this->title = 'Update Adminmenu: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Adminmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="adminmenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
