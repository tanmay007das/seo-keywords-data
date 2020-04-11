<?php

class workdata{

    public $conn; 
    public $query;
    public $servername;
    public $username;
    public $password;
    public $db;

    public $dname;
    public $kwd;
    public $rnk;
    public $vol;
    public $comp;

    public $iddata;

    public $domain;
    public $keyword;
    public $ranking;
    public $volume;
    public $competition;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "seo-keywords";

        $this->conn = mysqli_connect($servername, $username, $password, $db);
    
      }

    public function insert($dname,$kwd,$rnk,$vol,$com){
        
        $query = "INSERT INTO `seo-data`(`domainname`, `keyword`, `ranking`, `keywordvolume`, `keywordcompetition`) VALUES ('$dname','$kwd','$rnk','$vol','$com');";

        if($this->conn->query($query)){
            echo "Your data saved successfully. "; 
            
        }
       else{
           echo "Your data not saved";
       }
    }
    
    public function show($dmn){
        $edit = "Edit";
        $delete = "Delete";
        $query = "SELECT * FROM `seo-data` WHERE domainname = '$dmn'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $vl = $row['id'].'-'.$row['domainname'];
                
                $option= "<tr><td>".$row['keyword']."</td><td class='text-center'>".$row['ranking']."</td><td class='text-center'>".$row['keywordvolume']."</td><td class='text-center'>".$row['keywordcompetition']."</td><td><a href='update.php?id=$row[id]' class='text-white'><button class='btn-info pt-1 pl-3 pr-3 pb-1'>".$edit."</button></a></td><td><button onclick=dlt('$vl') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
               
                echo $option;
            }
        }
        else{
            echo "<script>alert('Your domain not found in our database')</script>";
        }
    }
    public function update($dnam,$kw,$rn,$vo,$com,$idd){
      
      $query = "UPDATE `seo-data` SET `domainname`='$dnam',`keyword`='$kw',`ranking`=$rn,`keywordvolume`=$vo,`keywordcompetition`='$com' WHERE `id`=$idd";
      $result = $this->conn->query($query);
      if($result){ 
          echo "Data updated successfully";
      }
      else{
         echo "Error updating record: " . $this->conn->error;
      }
      

    }
    public function delete($id,$dm){
        $query = "DELETE FROM `seo-data` WHERE id='$id';";
  
    if($this->conn->query($query)){
       # header ('Location:show.php'); 
        
        $query1 = "SELECT * FROM `seo-data` WHERE domainname = '$dm'";
        $result = $this->conn->query($query1);
        
        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                $vl = $row['id'].'-'.$row['domainname'];
                $edit = "Edit";
                $delete = "Delete";
                $option= "<tr><td class='text-center'>".$row['id']."</td><td>".$row['keyword']."</td><td class='text-center'>".$row['ranking']."</td><td class='text-center'>".$row['keywordvolume']."</td><td class='text-center'>".$row['keywordcompetition']."</td><td><button class='btn-info pt-1 pl-3 pr-3 pb-1'><a href='update.php?id=$row[id]' class='text-white'>".$edit."</a></button></td><td><button onclick=dlt('$vl') class='btn-danger pt-1 pl-2 pr-2 pb-1 dlt'>".$delete."</button></td></tr>";
               
                echo $option;
            }
      }
    
     }
    }
    public function showfld($id){
        $query = "SELECT * FROM `seo-data` WHERE id = '$id'";
       
        $result = $this->conn->query($query);
        if ($result->num_rows > 0){
            while($row = mysqli_fetch_assoc($result)){
                
                 $this->domain  = $row['domainname'];
                 $this->keyword = $row['keyword'];
                 $this->ranking = $row['ranking'];
                 $this->volume  = $row['keywordvolume'];
                 $this->competition = $row['keywordcompetition'];
                
            }
        }

    }
}


?>