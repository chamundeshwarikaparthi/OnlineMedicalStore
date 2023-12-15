<html>
<head>
<title>addition of supplier details</title>
<style>
body{
    background-image: url("inner.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
h1{
 color: red;
 text-align: center;
}
label{
width: 240px;
display: inline-block;
text-align: left;
}
form{
 text-align: center;
 color: blue;
 font-family: verdana;
 font-size: 20px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1><center><u>PLEASE ENTER YOUR DETAILS</center></u></h1>
<br/>
<br/>
<br/>
<form action="addsudb.php" method="POST" align="center">
<label for="suid"><b>SUPPLIER ID:</b></label>
<input type="text" name="suid" autocomplete="off">
<br/>
<br/>
<label for="suname"><b>SUPPLIER NAME:</b></label>
<input type="text" name="suname" autocomplete="off" required>
<br/>
<br/>
<label for="username"><b>USERNAME:</b></label>
<input type="text" name="username" autocomplete="off" required>
<br/>
<br/>
<label for="pass"><b>PASSWORD:</b></label>
<input type="password" name="pass" id="pass" autocomplete="off" required>
<br/>
<br/>
<input type="checkbox" onclick="myFunction()"><b>Show Password</b>
<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<br/>
<br/>
<label for="dob"><b>DATE OF BIRTH:</b></label>
<input type="date" id="dob" name="dob" autocomplete="off" required>
<br/>
<br/>
<label for="email"><b>EMAIL:</b></label>
<input type="email" id="email" name="email" autocomplete="off" required>
<br/>
<br/>
<label for="phN"><b>PHONE NUMBER:</b></label>
<input type="tel" id="phone" name="phone" autocomplete="off" required>
<br/>
<br/>
<input type="reset" value="RESET">
<input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>