<?php

include "connection.php";
extract($_POST);
extract($_GET);
switch($hidden){
  case 1:
    //INSERT
    $sql = "INSERT INTO product values('', '$id_category', '$name', '$description', '$img', '$price', '', '$status')";

    if(mysqli_query($connection, $sql)){
      header("location:../visual/upload/upload.php?answer=1");
    }else{
      header("location:../visual/upload/upload.php?answer=2");
    }
  break;


};

?>