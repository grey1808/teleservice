<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\StepsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Админка | Этапы выполнения работ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="steps-index">


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'content',
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(\yii\helpers\Url::toRoute($data->images),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:150px;'
                    ]);
                },
            ],
            'sort',
            //'comment',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'options' => ['width' => '150'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-info"title="Просмотр"><i class="glyphicon glyphicon-eye-open"></i></button>',
                            $url);
                    },
                    'update' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalTrEdit" title="Редактировать"><i class="glyphicon glyphicon-pencil"></i></button>',
                            $url);
                    },
                    'delete' => function ($url) {
                        return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,
                            [
                                'class' => 'btn btn-danger btn-a',
                                'data' => [
                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'method' => 'post',
                                ],
                            ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
