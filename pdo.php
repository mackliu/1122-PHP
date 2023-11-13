<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

//$sql="select * from students";
//$rows=$pdo->query($sql)->fetchAll();

/* $sql="insert into `dept`(`code`,`name`) values('801','會計科');";

$pdo->query($sql); */

/* $sql="update `dept` set `code`='901',`name`='演藝科' where `id`='9'";

$pdo->query($sql); */


/* $sql="delete from `dept` where `id`='8'";
$pdo->query($sql); */

/* $sql="delete from `dept` where `id`='10'";
echo $pdo->exec($sql); */
