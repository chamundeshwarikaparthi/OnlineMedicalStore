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
<h1>ENTER THE ID OF THE STORE TO VIEW DETAILS</h1>
<br/><br/><br/><br/><br/>
<form action="viewrdb.php" method="POST">
<label for="id"><b>SHOP ID:</b></label>
<input type="text" name="id" autocomplete="off" required>
<br/><br/><br/>
<input type="submit" name="submit" value="VIEW">
</form>
</body>
</html>
