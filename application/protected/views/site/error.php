<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Ошибка';
?>

<div class="container">
    <h2>Ошбика <?php echo $code; ?></h2>
    <div class="error">
        <?php echo CHtml::encode($message); ?>
    </div>
</div>
