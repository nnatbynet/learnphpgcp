<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/env.php';

$db = new PDO(
  'mysql:unix_socket=/cloudsql/api-project-266311:europe-west3:esp-lp-mysql;dbname=testdb;charset=utf8',
  $mysql_user,
  $mysql_password
);

foreach($db->query('SELECT * FROM users') as $row) {
  echo $row['username'].' '.$row['first_name']; 
  echo "<br/>";
}
