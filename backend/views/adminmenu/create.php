<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Adminmenu */

$this->title = 'Create Adminmenu';
$this->params['breadcrumbs'][] = ['label' => 'Adminmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminmenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
