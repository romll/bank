<?php

namespace app\components;

use Yii;
use yii\base\Widget;
use app\models\Statement;



class StatementModalWidget extends Widget
{
    public function run()
    {
        $model = new Statement();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //$sesion = Yii::$app->session;
            //$sesion->setFlash('saccess', "{$model->sum}.грн");
            return false;
            //return $this->refresh();
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }
}