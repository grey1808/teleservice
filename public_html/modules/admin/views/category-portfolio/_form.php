<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CategoryPortfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-portfolio-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    --><?//= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'images')->widget(InputFile::className(), [
        'language'      => 'ru',
        'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
        'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
        'options'       => ['class' => 'form-control'],
        'buttonOptions' => ['class' => 'btn btn-default'],
        'multiple'      => true       // возможность выбора нескольких файлов
    ]);?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
