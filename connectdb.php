<?php

try
{
  $bdd= new PDO("mysql:host=localhost;dbname=ancocokids","root","");
 
}
catch(PDOException $ex)
{
  echo "echec de connexion ".$ex->getMessage();
}