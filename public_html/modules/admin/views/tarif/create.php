<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Tarif */

$this->title = 'Добавить тариф';
$this->params['breadcrumbs'][] = ['label' => 'Tarifs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarif-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
