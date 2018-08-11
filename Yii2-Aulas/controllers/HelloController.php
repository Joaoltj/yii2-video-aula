<?php
namespace app\controllers;
use yii\web\Controller;
class HelloController extends Controller{
    public function actionSaySomething($mensagem = 'Hello'){
        $values = [
            'model' => $mensagem
        ];
        
       
    }
}
