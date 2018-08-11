<?php 
namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\Pessoas;
use app\models\Funcionario;
use yii\data\Pagination;
class ExerciciosController extends Controller{
   
    public function actionFormulario($f = 'ed'){
     
 $pagina = "formulario.php";
        $funcionario = new Funcionario();
   
        /*
        $funcionario->nome = 'João Santos';
        $funcionario->email = 'joaoltj09@gmail.com';
        $funcionario->salario = 2000.0;
        $funcionario->cargo = 'Programador Web';
        dd($funcionario);
        */

        $post = Yii::$app->request->post();
        if($funcionario->load($post)){
            $pagina = "formulario-confirmacao.php";
        }

           
        

        return $this->render($pagina,['funcionario'=>$funcionario]);
    }

    public function actionPessoas(){
   
        $query = Pessoas::find();
        $pagination = new Pagination([
            'defaultPageSize'=>3,
            'totalCount'=>$query->count()
        ]);

        $pessoas = $query->offset($pagination->offset)->limit($pagination->limit)->all();
     
       return $this->render('pessoas',[
            'pagination'=>$pagination,
            'pessoas'=>$pessoas
        ]);
    }
}