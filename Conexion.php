<?php
session_start(); 

class Conectar{
 public static function con(){
  $con = mysql_connect("localhost","root",""); 
  
  mysql_query("SET NAMES 'utf8'"); 
  
  mysql_select_db("nomina"); 

  echo "bien";
  
  return $con; 
 }
}
?>