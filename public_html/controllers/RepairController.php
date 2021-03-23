<?php


namespace app\controllers;


use app\modules\admin\models\News;
use app\modules\admin\models\Order;
use yii\data\Pagination;

class RepairController extends AppController
{
    public function actionIndex()
    {
        $news = News::find()->where(['publish'=>'0'])->orderby(['create_datetime'=>SORT_DESC])->all();
        $this->setMeta('Статус ремнота','Проверить статус ремнота','Ремонт телевизоров, нутбуков, телефонов, планшетов');

        $model = new Order();
        if ($model->load(\Yii::$app->request->post())&&$model->validate()) {
            $order = Order::find()->where(['request_number'=>$model->request_number])->one();
            return $this->render('index', compact('model','news','order'));
        }

        return $this->render('index', compact('model','news'));
    }
}