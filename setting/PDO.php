<?php
$host ='127.0.0.1';
$dbname = 'book';
$user='root';
$password='';
$dsn = "mysql:host=$host; dbname=$dbname";

$PDO = new PDO($dsn ,$user,$password);