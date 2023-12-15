<html>
<head>
<title>deletion of stock details</title>
<style>
body{
    background-image: url("inner.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
}
h1{
 color: orange;
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
 color: green;
 font-family: verdana;
 font-size: 30px;
}
</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1>ENTER THE STOCK ID</h1>
<br/><br/><br/>
<form action="delstdb.php" method="POST">
STOCK ID:<input type="text" name="stid" autocomplete="off" required>
<br/><br/><br/>
<input type="reset" value="CANCEL">
<input type="submit" name="delete" value="DELETE">
</form>
</body>
</html> 