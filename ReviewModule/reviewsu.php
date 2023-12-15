<?php
$db = mysqli_connect("localhost","root","","medical");
if(!$db)
{
    die("Connection failed: ".mysqli_connect_error());
}		
 
  $sql = "SELECT * FROM supplier";
  $result = $db->query($sql); 
  if($result && $result->num_rows) 
  {
   echo "<html>";
    echo "<head>";
    echo "<style>";
    echo "table, th, td {
                           border: 1px solid black;
                           border-collapse: collapse;
                        }
          th, td {
                           padding: 10px;
                 }
          .center{
                           margin-left: auto;
                           margin-right: auto;
                  }
          body{
                           background-color:#BEEAF9;
                           border: 2px solid blue;
                           border-radius: 6px;
              }
           .navbar {
  overflow: hidden;
  background-color: #333;  
  position: fixed;
  bottom: 0;
  width: 99%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.navbar .icon {
  display: none;
}

  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
            ";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<br/><br/><br/><br/>";
    echo "<h2><b><i><u><center>DETAILS OF THE SUPPLIER</center></u></i></b><h2>";
    echo "<br/>";
    echo "<table style='width:50%' class='center'>";
    echo "<tr>";
    echo "<th style='text-align:left'>I'd</th>";
    echo "<th style='text-align:left'>NAME</th>";
    echo "<th style='text-align:left'>USERNAME</th>";
    echo "<th style='text-align:left'>PASSWORD</th>";
    echo "<th style='text-align:left'>DATE OF BIRTH</th>";
    echo "<th style='text-align:left'>E-MAIL</th>";
    echo "<th style='text-align:left'>PHONE</th>";
    echo "</tr>";
   while($row = $result->fetch_assoc()) 
   {
    
    echo "<tr>";
    echo "<th style='text-align:left'>".$row['suid']."</th>";
    echo "<th style='text-align:left'>".$row['suname']."</th>";
    echo "<th style='text-align:left'>".$row['username']."</th>";
    echo "<th style='text-align:left'>".$row['pass']."</th>";
    echo "<th style='text-align:left'>".$row['dob']."</th>";
    echo "<th style='text-align:left'>".$row['email']."</th>";
    echo "<th style='text-align:left'>".$row['phone']."</th>";
    echo "</tr>";
   }
     echo "</table><br/><br/>";
 echo "<div class='navbar' id='myNavbar'>";
        echo "<a href='suppliermain.php'>BACK TO SUPPLIER PAGE</a>";
        echo "</div>";
    echo "</body>";
    echo "</html>"; 
  } 
  else 
  {
   echo "0 results";
  }

mysqli_close($db); // Close connection
?>