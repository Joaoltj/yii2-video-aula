<?php
namespace app\models;
use yii\base\Model;

class Funcionario extends Model{
    public $nome;
    public $email;
    public $salario;
    public $cargo;

    public function rules(){
      /*  return [
            ['nome','required'],
            ['email','required'],
            ['salario','required'],
            ['cargo','required']
        ];*/

        return [
            [['nome','email','salario','cargo'],'required'],
            ['email','email'],
            ['salario','number']
        ];
    }

    public function attributeLabels(){
        return [
            'nome'=>'Nome Completo',
            'email'=>'E-mail',
            'idade'=>'Idade'
        ];
    }
}