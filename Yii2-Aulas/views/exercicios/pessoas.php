<?php
use yii\widgets\LinkPager;
?>

<ul>
 <?php foreach($pessoas as $pessoa):?>
    <li><?= $pessoa->nome?></li>
 <?php endforeach?>
</ul>

<?= LinkPager::widget(['pagination'=>$pagination])?>