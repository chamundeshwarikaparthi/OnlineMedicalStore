<?php
$db = mysqli_connect("localhost","root","","medical");
if(!$db)
{
    die("Connection failed: ".mysqli_connect_error());
}
if(isset($_POST['submit']))
{		
  $id = $_POST['id'];
 
  $sql = "SELECT id, sname, addre ,cont FROM store where id=$id";
  $result = $db->query($sql); 
  if ($result->num_rows != 0) 
  {
   while($row = $result->fetch_assoc()) 
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

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
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
    echo "<br/><br/><br/><br/><br/><br/>";
    echo "<h2><b><i><u><center>DETAILS OF THE STORE</center></u></i></b><h2>";
    echo "<br/>";
    echo "<table style='width:50%' class='center'>";
    echo "<tr>";
    echo "<th style='text-align:left'>I'd</th>";
    echo "<th style='text-align:left'>".$row['id']."</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th style='text-align:left'>NAME</th>";
    echo "<th style='text-align:left'>".$row['sname']."</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th style='text-align:left'>ADDRESS</th>";
    echo "<th style='text-align:left'>".$row['addre']."</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th style='text-align:left'>CONTACT</th>";
    echo "<th style='text-align:left'>".$row['cont']."</th>";
    echo "</tr>";
    echo "</table>";
     echo "<div class='navbar' id='myNavbar'>";
        echo "<a href='storemain.php'>BACK TO STORE PAGE</a>";
        echo "</div>";
    echo "</body>";
    echo "</html>";
   }
  } 
  else 
  {
   echo "0 results";
  }
}
mysqli_close($db); // Close connection
?>