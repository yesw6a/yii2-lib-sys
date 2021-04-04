<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '新增图书';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  <h1><?= Html::encode($this->title) ?></h1>
  <div class="flex-col">
    <?php $form = ActiveForm::begin([
      'id' => 'books-add-form',
      'options' => ['class' => 'form form-horizontal'],
    ]); ?>

    <div class="flex-col form-container">
      <?= $form->field($books, 'name')->label('名字') ?>
      <?= $form->field($books, 'isbn')->label('图书编号') ?>
      <?= $form->field($books, 'price')->label('价格(CNY)') ?>
      <?= $form->field($books, 'author')->label('作者') ?>
      <?= $form->field($books, 'cover')->label('封面(url)') ?>
      <?= $form->field($books, 'publisher')->label('出版社') ?>
      <?= $form->field($books, 'category')->label('分类') ?>
    </div>

    <div class="form-group">
      <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end() ?>
  </div>
</div>