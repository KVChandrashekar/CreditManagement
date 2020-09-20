<!DOCTYPE html>
<html>
<head>
  <title>History-page</title>
  <style type="text/css">
.cap{
  font-size: 28px;
  border:none;
  color: #3678d6; 
  background-color: #accf4c;
  border-radius: 5px;
 text-decoration: none;

}
.cent{
  text-align: center;
  /*justify-content: center;*/
}
.cap:hover{
  background-color: #3678d6;
  color:  #accf4c;
}
.test{
  outline: dashed;
  border:none;
  height: 60px;
  width: 170px;
}


  </style>
</head>
<body>

</body>
</html>



<link rel="stylesheet" href="style.css">


<?php
include "connection.php";

$sql = 'SELECT sender ,receiver ,credt FROM history';
   $result = mysqli_query($conn,$sql);
   
   if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%' cellspacing='20px' border='3px' >";
            echo "<center><tr>";
            echo "<th> Sender </th>";
            echo "<th> Receiver </th>";
            echo "<th> Amounts </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            
                echo "<td ><center>"  . $row['sender'] . "</td>  ";
               
                echo "<td ><center>"  . $row['receiver'] . "</td>  ";
                echo "<td ><center>"  . $row['credt'] . "</td>  ";
               
               echo "</tr>";
        
        }
        echo "</table>";  

    }}

    ?>
<div class="cent">
              <button class="test"> <a href="display.php?id=1" class="cap">View Users</a></button>

        </div>