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
<h1><u>ENTER THE MEDICINE ID</u></h1>
<br/><br/><br/>
<form action="delmdb.php" method="POST">
MEDICINE ID:<input type="text" name="mid" autocomplete="off" required>
<br/><br/><br/>
<input type="reset" value="CANCEL">
<input type="submit" name="delete" value="DELETE">
</form>
</body>
</html> 