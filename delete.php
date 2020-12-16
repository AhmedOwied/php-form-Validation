<?php

include "config.php";

if(isset($_GET['id'])){
    $user_id =$_GET['id'];

    $sql="DELETE FROM `users` WHERE id= '$user_id' ";

    $result=$connect->query($sql);

    if($result == TRUE){
        echo 'Record Deleted successfully';
    }else{
        echo'Error';
    }
    $connect = null;
}

?>