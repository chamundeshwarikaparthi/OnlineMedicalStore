<html>
<head>
<title>viewing details</title>
<style>
body{
    background-image: url("inner.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
h1{
 color: orange;
 text-align: center;
}
label{
width: 240px;
display: inline-block;
text-align: left;
}
form{
 text-align: center;
 color: green;
 font-family: verdana;
 font-size: 20px;
}

</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1>ENTER THE ID OF THE STOCK TO VIEW DETAILS</h1>
<br/><br/><br/><br/><br/>
<form action="viewstdb.php" method="POST">
<label for="id"><b>STOCK ID:</b></label>
<input type="text" name="stid" autocomplete="off" required>
<br/><br/><br/>
<input type="submit" name="submit" value="VIEW">
</form>
</body>
</html>