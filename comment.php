
<?php
  
   
      $server     = "server name here";
    $username   = "username here";
    $password   = "password here";
    $database   = "db_name here";
   $con = mysqli_connect($server, $username, $password, $database);

   if($con){
      
      //echo "<h4>Have Any query?</h4>";
   }

     $name    = $_POST["name"];
      $email    = $_POST["email"];
     $comment = $_POST['comment'];
     
  
  
    $sql = "insert into comment(name,email,comment) values('$name', '$email','$comment')";

   if($con->query($sql) == TRUE){
    
      echo "<script>window.alert('Will Get Back To With_In 48Hrs.');window.document.location='./#contactus'</script>";

    
      
   }else{
      
   }
?>

