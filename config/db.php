<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=insurance',
    'username' => 'insurance',
    'password' => 'root',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => '\yii\db\pgsql\Schema',
            'defaultSchema' => 'insurance',
        ]
    ],
];
