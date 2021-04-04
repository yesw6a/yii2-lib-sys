<?php

namespace app\controllers;

use yii\web\Controller;

use app\models\Books;

class BooksController extends Controller
{
  public function actionAdd()
  {
    $books = new Books;
    $post = \Yii::$app->request->post();
    if ($post && Books::EVENT_BEFORE_INSERT) {
      $isbn = $post['Books']['isbn'];
      if (Books::find()->where(['isbn' => $isbn])->one()) {
        \Yii::$app->getSession()->setFlash('danger', 'ISBN已存在');
      } else {
        if (
          $books->load(\Yii::$app->request->post())
          && $books->validate()
          && $books->save()
        ) {
          \Yii::$app->getSession()->setFlash('success', '提交成功');
        }
      }
    }

    return $this->render('add', [
      'books' => $books,
    ]);
  }

  public function actionDelete($id)
  {
    if (
      \Yii::$app->request->post()
    ) {
      $books = Books::findOne($id);
      $books->delete();
    }
  }

  public function actionUpdate($id)
  {
    if (!($books = Books::findOne($id))) {
      \Yii::$app->getSession()->setFlash('warning', '未找到id：'.$id.'相关的数据');
    }

    if (
      \Yii::$app->request->post()
      && $books->load(\Yii::$app->request->post())
      && $books->validate()
      && $books->update()
    ) {
      \Yii::$app->getSession()->setFlash('success', '修改成功');
    }

    return $this->render('update', [
      'books' => $books,
    ]);
  }
}
