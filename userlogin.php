<?php
$con = mysqli_connect('localhost','chamundeshwari','Medical@123','medical');
if(mysqli_connect_errno()){
	echo "Failed to connect ".mysqli_connect_error();
}
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="userlogin.css">
</head>
<body>
<div class="std">
<form method="post">
<div class="headcol">
<center><p><b>USER LOGIN</b></p></center>
<hr></hr>
</div>
<center><input type="text" placeholder="Enter UserName" class="log" name="username" required ></input></center><br/>
<center><input type ="password" placeholder="Enter password" name="pw" required></input></center>
<center><input type="submit" value="Submit" name="submit"/></center>
<center><p>Not a user?<a href="reg.php">Register here</a></p></center>
<br/>
<br/>
</form>
</div>
<?php
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$pwd = $_POST['pw'];
	$_SESSION['id'] = $username;
	$_SESSION['p'] = $pwd; 
	$q = "SELECT * FROM customer WHERE username = '$username' && password='$pwd'";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	if($num==0){
				echo ("<script LANGUAGE='JavaScript'>
		 window.alert('Wrong one pwd');
		window.location.href = 'stdlogin.php';
		</script>");
	}
	else{
		echo ("<script LANGUAGE='JavaScript'>
		 window.alert('Wrong pwd');
		window.location.href = 'stdlogin.php';
		</script>");
	//header('location:');

	}
}
?>
</body>
</html>