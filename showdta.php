<?php

include ('class.php');

$dname = $_POST['dname'];

$showd = new workdata();

$showd->show($dname);







?>