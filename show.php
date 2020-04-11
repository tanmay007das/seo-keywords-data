<?php
/*
include('connection.php');
$show="";
$nm = 0;
if(isset($_POST['submit'])){
 
 $domain = $_POST['dname'];
 $query = "SELECT * FROM seodata WHERE domain = '$domain';";

 $show = $conn->query($query);

 if($show->num_rows > 0){
   $nm = 1;
 }
}
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>SEO Data Application</title>
  </head>
  <body>  
	  
<div class="container mt-5">
  <h2 class="text-center">Keyword Information</h2>
  
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-8"></div>  
    <div class="col-md-4"> <a href="index.php" class="btn btn-info"> Back To Home Page </a> </div>
   </div>
  </div>
   <p>Enter Domain name for details</p><span id="msg1"></span>
   <input type="text" name="dname" id="dname">
   <button type="submit" id="submit" class="btn btn-primary" name="submit" value="Submit">Submit Domain</button>

   <br><br><br>
  
      <table class='table table-striped'>
      <thead>
      <tr>
      <!--<th class='text-center'>ID</th> -->
      <th>Keyword</th>
      <th class='text-center'>Rank</th>
      <th class='text-center'>Volume</th>
      <th class='text-center'>Competition</th>
      <th class='text-center'></th>
      <th class='text-center'></th>
      </tr>
      </thead>
      <tbody id="resp">      
        
        
        </tbody>
       </table>
  
</div>
	 
<script>
     $(document).ready(function(){
     	$('#submit').click(function(){
     		var dnam = $('#dname').val();
     		     		
           if(dnam==""){
               $('#msg1').html(" Required");
           }else{
                $.ajax({
                url:'showdta.php',
                type:'post',
                data:{
                    dname: dnam
                },
               success: function(response){
                $('#resp').html(response);
                //alert(response);
               }
            }); 
           }
               
     	 });
      });

      </script>
     <script>
      function dlt(a){
        var valu = a.split("-");
        //var x = a;
        //alert(valu[1]);
        var dmn = valu[1];
        var id = valu[0];
        
        var r = confirm("Do you really want to delete record?");
        if(r == true){
          $.ajax({
                url:'delete.php',
                type:'post',
                data:{
                    dnm: dmn,
                    id: id
                },
               success: function(response){
                $('#resp').html(response);
                //alert(response);
               }
            }); 
        }        
      }
     </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>