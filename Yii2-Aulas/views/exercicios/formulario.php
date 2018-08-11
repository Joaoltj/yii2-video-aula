<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h2>Cadastro de Funcionario</h2>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($funcionario,'nome')?>
<?= $form->field($funcionario,'email')?>
<?= $form->field($funcionario,'salario')?>
<?= $form->field($funcionario,'cargo')?>


<?= Html::submitButton('Cadastrar',['class'=>'btn btn-danger '])?>

<?php ActiveForm::end(); ?>