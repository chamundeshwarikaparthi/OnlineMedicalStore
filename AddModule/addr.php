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
<h1><center><u>ADD THE SHOP DETAILS</center></u></h1>
<br/>
<br/>
<br/>
<form action="addrdb.php" method="POST" align="center">
<label for="id"><b>SHOP ID:</b></label>
<input type="text" name="id" autocomplete="off">
<br/>
<br/>
<label for="sname"><b>SHOP NAME:</b></label>
<input type="text" name="sname" autocomplete="off" required>
<br/>
<br/>
<label for="addre"><b>ADDRESS:</b></label>
<input type="text" name="addre" autocomplete="off" required>
<br/>
<br/>
<label for="cont"><b>CONTACT:</b></label>
<input type="text" name="cont" autocomplete="off" required>
<br/>
<br/>
<input type="reset" value="RESET">
<input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>
