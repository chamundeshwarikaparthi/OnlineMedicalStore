<html>
<head>
<title>addition of store details</title>
<style>
body{
    background-image: url("inner.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
h1{
 color: black;
 text-align: center;
}
label{
width: 240px;
display: inline-block;
text-align: left;
}

form{
 text-align: center;
 color: red;
 font-family: verdana;
 font-size: 20px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1><center><u>ADD THE MEDICINE DETAILS</center></u></h1>
<br/>
<br/>
<br/>
<form action="addmdb.php" method="POST" align="center">
<label for="mid"><b>SHOP ID:</b></label>
<input type="text" name="mid" autocomplete="off"> 
<br/>
<br/>
<label for="mname"><b>MEDICINE NAME:</b></label>
<input type="text" name="mname" autocomplete="off" required>
<br/>
<br/>
<label for="mprice"><b>PRICE:</b></label>
<input type="text" name="mprice" autocomplete="off" required>
<br/>
<br/>
<label for="mcom"><b>COMPANY:</b></label>
<input type="text" name="mcom" autocomplete="off" required>
<br/>
<br/>
<label for="mweigth"><b>NET WEIGHT:</b></label>
<input type="text" name="mweigth" autocomplete="off" required>
<br/>
<br/>
<input type="reset" value="RESET">
<input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>
