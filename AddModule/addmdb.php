<?php
$db = mysqli_connect("localhost","root","","medical");

if(!$db)
{
    die("Connection failed: ". mysqli_connect_error());
}

if(isset($_POST['submit']))
{		
    $mid = $_POST['mid'];
    $mname = $_POST['mname'];
    $mprice=$_POST['mprice'];
    $mcom = $_POST['mcom'];
    $mweigth = $_POST['mweigth'];
    $insert = mysqli_query($db,"INSERT INTO medicine(mid,mname,mprice,mcom,mweigth) VALUES ('$mid','$mname','$mprice','$mcom','$mweigth')");
    if(!$insert)
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
 ";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<br/><br/><br/><br/><br/><br/>";
        echo "<center><b><i>RECORDS NOT ADDED</i></b></center>";
    echo "</body>";
    
echo "</html>";
    }
    else
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
        echo "<center><b><i>RECORDS ADDED SUCCESSFULLY!</i></b></center>";
        echo "<div class='navbar' id='myNavbar'>";
        echo "<a href='medimain.php'>BACK TO MEDICINE PAGE</a>";
        echo "</div>";
echo "</body>";
echo "</html>";
        $in=mysqli_query($db,"INSERT INTO cart(mid,mname,mcom,mweigth,mprice) SELECT mid,mname,mcom,mweigth,mprice FROM medicine WHERE mid='$mid'");
        if(!$in)
        {
           echo"fail";
       }
    }
}

mysqli_close($db); 
?>
