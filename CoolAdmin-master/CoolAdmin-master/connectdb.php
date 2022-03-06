<?php

try
{
  $bdd= new PDO("mysql:host=localhost;dbname=ancocokids","root","");
  echo "connexion reussi";
}
catch(PDOException $ex)
{
  echo "echec de connexion ".$ex->getMessage();
}
?>