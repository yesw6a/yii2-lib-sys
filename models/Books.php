<?php

namespace app\models;

use yii\db\ActiveRecord;

class Books extends ActiveRecord
{
  public function rules()
  {
    return [
      [['name', 'isbn', 'price', 'category'], 'required'],
      [['author', 'cover', 'publisher'], 'safe'],
    ];
  }
}
