<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;port=8889;dbname=lib_sys',
    'username' => 'root',
    'password' => '123',
    'charset' => 'utf8',
    'attributes' => [
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_TO_STRING,
    ],

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
