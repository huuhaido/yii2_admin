<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel backend\models\AdminmenuSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Adminmenus';
    $this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<p>
    <?= Html::a('Create Adminmenu', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    /*'filterModel' => $searchModel,*/
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'title',
        'rank',
        'image',
        'link_url:url',
        'left_right',
        // 'type',
        // 'description',
        // 'content',
        // 'image',
        // 'link_url:url',
        // 'left_right',
        // 'status',
        // 'created',
        // 'updated',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
