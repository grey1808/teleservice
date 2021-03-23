<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li class="breadcrumb-item active">Статус ремнота</li>
    </ol>
    <h1 class="pagetitle">Проверить статус ремнота</h1>
    <div class="row">
        <div class="col-md-8">

            <?php $form = ActiveForm::begin(); ?>

            <div class="col-md-8">
                <?= $form->field($model, 'request_number')->textInput(['maxlength' => true,'placeholder'=>'Номер заказа'])->label(false) ?>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <?= Html::submitButton('<span class="blink_on">Проверить</span>', ['class' => 'button btn']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
            <?php if (isset($order)):?>
            <div class="row">
                <div class="col-md-6">
                    <div class="push30"></div>
                    <p><span>Номер заявки:</span> <strong class=""><?=$order->request_number?></strong></p>
                    <p><span>Производитель:</span> <strong class=""><?=$order->manufacturer?></strong></p>
                    <p><span>Модель:</span> <strong class=""><?=$order->model?></strong></p>
                    <p><span>Серийный номер:</span> <strong class=""><?=$order->serial_number?></strong></p>
                    <p><span>Статус заказа:</span> <strong class="text-status"><?=$order->status?></strong></p>
                </div>
                <div class="col-md-6">
                    <div class="push30"></div>
                    <img class="img-responsive" src="<?=$order->images?>" />
                </div>
            </div>
            <?php endif;?>
        </div>
        <div class="col-md-4">
            <?php if (isset($news)):?>
                <div class="aside-news">
                    <div class="title-h3" style="margin-top: -8px;">Последние новости</div>
                    <div class="inner">
                        <div class="row">
                            <?php foreach ($news as $item):?>
                                <div class="col-sm-6 col-md-12">
                                    <div class="element relative">
                                        <div class="img-wrapper col-md-4 col-sm-4 col-xs-4">
                                            <a href="<?=Url::to(['news/view', 'id'=>$item->alias])?>"><img class="img-responsive" src="<?=$item->images?>" alt="<?=$item->name?>" /></a>
                                        </div>
                                        <div class="col-md-1  col-sm-2  col-xs-2"></div>
                                        <div class="element-content col-md-7  col-sm-6 col-xs-6">
                                            <div class="date f13"><?=Yii::$app->formatter->asDate($item->create_datetime, 'php:d.m.Y');?></div>
                                            <div class="push2"></div>
                                            <div class="title bold f14">
                                                <?=$item->name?>
                                            </div>
                                            <a href="<?=Url::to(['news/view', 'id'=>$item->alias])?>" class="f13">Читать далее</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <div class="push20"></div>
        </div>
    </div>
    <div class="push30"></div>
</div>
</div>




<div class="footer-push"></div>
