<?php
 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php 
    if(Yii::$app->session->hasFlash('OK')){
        echo Yii::$app->session->getFlash('OK');
    }
?>
<?php $fomne= ActiveForm::begin(); ?>
<?= $fomne->field($model, 'name'); ?>
<?= $fomne->field($model, 'email');?>
<?= $fomne->field($model, 'password');?>
<?= Html::submitButton('Hoàn thành'); ?>
