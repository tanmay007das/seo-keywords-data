<?php



 include('class.php');

 $dname=htmlentities($_POST['dname']);
 $dname=trim($dname);
 $kwd  =htmlentities($_POST['kwrd']);
 $kwd = trim($kwd);
 $rnk  =htmlentities($_POST['rank']);
 $rnk = trim($rnk);
 $vol  =htmlentities($_POST['vol']);
 $vol = trim($vol);
 $comp =htmlentities($_POST['comp']);
 $comp = trim($comp);
                    
 $insrt = new workdata();

 $insrt->insert($dname,$kwd,$rnk,$vol,$comp);





 




?>