<?php  
//insert.php  
$connect = mysqli_connect("armillaria.de.mysql", "armillaria_deak", "B0st4nOO1!", "armillaria_deak");  
if(isset($_POST["name"]))  
{  
     $name = mysqli_real_escape_string($connect, $_POST["name"]);  
     $message = mysqli_real_escape_string($connect, $_POST["message"]);  
     $sql = "INSERT INTO ak_newsletter(username, mail) VALUES ('".$name."', '".$message."')";  
     if(mysqli_query($connect, $sql))  
     {  
          echo "Done!";  
     }  
}  
?>