<?php
 include('class.php');

 if(!isset($_GET['id'])){
   die("Cannot access this page directly!");
 }
else{
    $iddta = $_GET['id'];

    $shwdta = new workdata();

    $shwdta->showfld($iddta);


}
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
    
	<h1 class="text-center pt-5">Update Information</h1>
	<div class="container mt-5">
     
     <div class="row">
      <div class="col-md-12">
	   <form>
	  	<div class="form-group">
		    <label for="">Domain Name</label><span id="msg1" class="text-danger"></span>
		  	<input type="text" class="form-control" placeholder="<?php echo $shwdta->domain; ?>" id="dname" aria-describedby="emailHelp"><br />
			

		  	<label for="">1 Keyword</label><span id="msg2" class="text-danger"></span>
		  	<input type="text" class="form-control" placeholder="<?php echo $shwdta->keyword; ?>" id="kwd" aria-describedby="emailHelp"><br />
			

		  	<label for="">Ranking of your keyword</label><span id="msg3" class="text-danger"></span>
			  <input type="text" class="form-control" placeholder="<?php echo $shwdta->ranking; ?>" id="rank" aria-describedby="emailHelp"><br />

        <label for="">Volume of your keyword</label><span id="msg4" class="text-danger"></span>
			  <input type="text" class="form-control" placeholder="<?php echo $shwdta->volume; ?>" id="vol" aria-describedby="emailHelp"><br />

        <label for="">Competition of your keyword</label><span id="msg5" class="text-danger"></span>
			  <input type="text" class="form-control" placeholder="<?php echo $shwdta->competition; ?>" id="comp" aria-describedby="emailHelp"><br />

              <input type="hidden" id="hdnid" value="<?php echo $iddta;?>">
      </div>
			</form>
		    <button id="submit" class="btn btn-primary" value="submit"> Update Information </button><br /><br />
		
		<div id="resp" class="text-center"></div>
	  </div>
	 </div>
    </div>
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
     $(document).ready(function(){
     	$('#submit').click(function(){
     		var dnam = $('#dname').val();
     		var kw = $('#kwd').val();
     		var rnk = $('#rank').val();
            var vol = $('#vol').val();
     		var comp = $('#comp').val();
            var id = $('#hdnid').val();
     		
           if(dnam=="" || kw=="" || rnk=="" || vol=="" || comp==""){
            if(dnam==""){
                $('#msg1').html(" Required");
            }
            if(kw==""){
                $('#msg2').html(" Required");
            }
            if(rnk==""){
                $('#msg3').html(" Required");
            }
            if(vol==""){
                $('#msg4').html(" Required");
            }
            if(comp==""){
                $('#msg5').html(" Required");
            }
            
           }else{
                $.ajax({
                url:'updatedta.php',
                type:'post',
                data:{
                    dname: dnam,
                    kwrd: kw,
                    rank: rnk,
                    vol: vol,
                    comp: comp,
                    id: id
                },
               success: function(response){
                //$('#resp').html(response);
                alert(response);
               }
            }); 
           }
               
     	 });
      });

    </script>
  
  </body>
</html>