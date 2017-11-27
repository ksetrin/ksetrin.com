<?php
/*
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=kse2modules',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
*/

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=us-cdbr-iron-east-02.cleardb.net;dbname=heroku_b2bb57019e321a9',
    'username' => 'b52c293abcf6c3',
    'password' => '8deaf7c4',
    'charset' => 'utf8',
];


//'dsn' => 'pgsql:host=localhost;port=5432;dbname=mydatabase', // PostgreSQL

/*
C:\xampp\htdocs\kse2modules>heroku addons:add cleardb:ignite
Adding cleardb:ignite on ksetrin... done, v26 (free)
Use `heroku addons:docs cleardb` to view documentation.

C:\xampp\htdocs\kse2modules>heroku config
=== ksetrin Config Vars
CLEARDB_DATABASE_URL: mysql://b52c293abcf6c3:8deaf7c4@us-cdbr-iron-east-02.clear
db.net/heroku_b2bb57019e321a9?reconnect=true
*/