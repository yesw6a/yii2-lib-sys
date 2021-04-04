<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'Yii2 图书管理系统';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>图书管理系统</h1>
        <p class="lead">Library System</p>
        <div class="body-content">
            <?php
            try {
                $cols = [
                    ['label' => 'ID', 'attribute' => 'id', 'headerOptions' => ['width' => '80']],
                    ['label' => '条形码', 'attribute' => 'isbn', 'headerOptions' => ['width' => '150']],
                    ['label' => '封面', 'attribute' => 'cover', 'headerOptions' => ['width' => '100'], 'format' => [
                        'image',
                        [
                            'width' => '37',
                            'height' => '52',
                        ]
                    ]],
                    ['label' => '名称', 'attribute' => 'name', 'headerOptions' => ['width' => '200']],
                    ['label' => '作者', 'attribute' => 'author', 'headerOptions' => ['width' => '120']],
                    ['label' => '价格(CNY)', 'attribute' => 'price', 'headerOptions' => ['width' => '80']],
                    ['label' => '出版商', 'attribute' => 'publisher', 'headerOptions' => ['width' => '200']],
                    ['label' => '分类', 'attribute' => 'category', 'headerOptions' => ['width' => '100']],
                    ['label' => '入库时间', 'attribute' => 'create_at', 'headerOptions' => ['width' => '200']],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'header' => '操作',
                        'template' => '{delete} {update}', //只需要展示删除和更新  
                        'headerOptions' => ['width' => '200'],
                        'buttons' => [
                            'delete' => function ($url, $model, $key) {
                                $url = 'index.php?r=books/delete&id=' . $key;
                                return Html::a('删除', $url, [
                                    'class' => 'btn btn-danger',
                                    'data-method' => 'post',
                                    'data' => ['confirm' => '确定删除ISBN：' . $model->isbn . '的书籍吗？'],
                                ]);
                            },
                            'update' => function ($url, $model, $key) {
                                $url = 'index.php?r=books/update&id=' . $key;
                                return  Html::a('修改', $url, [
                                    'class' => 'btn btn-warning',
                                ]);
                            }
                        ],
                    ]
                ];
                $layout = "
                        <div class='container-fluid'>
                            <div class='row' style='margin-bottom: 10px;'>
                                <a class='btn btn-primary' href='index.php?r=books/add' style='float:right'>新增图书</a>
                            </div>
                        </div>
                        {items}
                        {pager}
                    ";

                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'columns' => $cols,
                    'layout' => $layout,
                ]);
            } catch (\Throwable $th) {
                //throw $th;
            }
            ?>
        </div>
    </div>
</div>