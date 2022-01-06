<?php

const user = "root";
const passw = "";
const db = "loginDB";
const host = "localhost";

global $pdo;

$pdo = new PDO("mysql:dbname=" . db . "; host=". host,user,passw);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
