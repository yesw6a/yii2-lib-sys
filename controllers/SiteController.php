<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;

use app\models\Books;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Books::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $books = $query->all();

        return $this->render('index', [
            'books' => $books,
            'dataProvider' => $dataProvider,
        ]);
    }
}
