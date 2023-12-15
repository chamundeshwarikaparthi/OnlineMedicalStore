<html>
<head>
<title>deletion of shop details</title>
<style>
body{
    background-image: url("inner.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
h1{
 color: red;
 text-align: center;
 font-size: 50px
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
 font-size: 30px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1>ENTER THE SHOP ID</h1>
<br/><br/><br/>
<form action="delrdb.php" method="POST">
SHOP ID:<input type="text" name="id" autocomplete="off" required>
<br/><br/><br/>
<input type="reset" value="CANCEL">
<input type="submit" name="delete" value="DELETE">
</form>
</body>
</html> 
