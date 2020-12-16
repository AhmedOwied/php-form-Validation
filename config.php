<?php

$dsn='mysql:host=localhost;dbname=mydb'; //data source name
$user='root'; //user to connect 
$pass='';

try{
    $connect =new PDO($dsn,$user,$pass); //start A New connection with class PDO
     // echo 'You are connected';
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
}
catch(PDOException $e){ // ($e) variable 
      echo 'Failed '. $e->getmessage();

}

?>