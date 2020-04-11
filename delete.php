<?php

include ('class.php');

  if(!isset($_POST['id'])){
    header ('Location:index.php'); 
  }else{
    $id = $_POST['id'];
    $dnm = $_POST['dnm'];
    $dlt = new workdata();

    $dlt->delete($id,$dnm);
  }

    
  
    
    
  

