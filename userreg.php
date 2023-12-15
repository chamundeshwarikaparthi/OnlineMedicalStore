<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$con = mysqli_connect('localhost','chamundeshwari','Medical@123','medical');
if(mysqli_connect_errno()){
    echo "Failed to connect ".mysqli_connect_error();
}
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html lang="en"> <!--<![endif]-->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="userreg.css" />
</head>
<body>
<!--<div class=bimage>-->
<center>
<div class="container">
    <section id="content">
        <form name="frmImage" enctype="multipart/form-data" action="" method="POST">
            <center><h1>Register Form</h1></center>
            <div>
                <input type="text" placeholder="Enter your Name" required name="name" />
            </div>
			<div>
                <input type="text" placeholder="Enter username" required name="username" />
            </div>
	    <div>
                <input type="email" placeholder="Enter your email-id" required name="email" />
            </div>
	    <div>
                <input type="tel" placeholder="Enter phone" required name="phone" />
            </div>
	    <div>
                <input type="password" placeholder="password" required name="password"/>
            </div>
	    <div>
                <input type="text" placeholder="Enter your address" required name="address" />
            </div>
           <div>
                <!--<button onclick="registrationForm()">Register</button>
		<a href="index.php"><input type="submit1" value="Cancel"/></a>-->
        <!--<input type="submit" name="submit" value="Register"></input>-->
            </div>
<div>
<br></br>
		
        <input type="submit" value="Submit" name="submit"/>
            </div>

        </form>
<!-- form -->
<!--<div class="formProcessing"></div>
<div class="formResult"></div>
<script>
function registrationForm(){
var name = $('#name').val();
var phone = $('#phone').val();
var email = $('#email').val();
var password = $('#password').val();
var address = $('#address').val();
if(name != "" &&  phone != "" && email != "" && password != "" && address != ""){
$.ajax({
type: "POST",
url: "stdregprocess.php",
data: "name="+name+"&phone="+phone+"&email="+email+"&password="+password+"&adress="+adress ,
cache: false,
beforeSend: function(){
$('.formProcessing').fadeIn('fast').html("Processing your request");
},
success: function(html){
$('.formProcessing').fadeOut('fast');
$('.formResult').fadeIn('fast').html(html);
},
});
}
else{
$('.formResult').fadeIn('fast').html("Please fill all the details correctly");
}
}
</script> -->








<?php     //start php tag
//include connect.php page for database connection
//include('db.php');
//require_once "db.php";
//if submit is not blanked i.e. it is clicked.
if(isset($_POST['submit'])){
    //echo "Hi";
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$address=$_POST['address'];
if($name=='' || $username=='' || $email=='' || $phone=='' || $password=='' || $address=='')
{
echo "Please fill the empty field.";
}
else{
    

$sql="insert into customer(name,username,email,phone,password,address) values('$name','$username','$email','$phone','$password', '$address')";
$res=mysqli_query($con,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
if($res)
{
echo "Record successfully inserted";
}
else{
    Echo "There is some problem in inserting record";


}
}
}

?>
</div>
</body>
</html>