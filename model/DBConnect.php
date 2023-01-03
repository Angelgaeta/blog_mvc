<?php

function dbconnect(): PDO
{
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  } catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
  }
}