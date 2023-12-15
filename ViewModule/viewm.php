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
 color: purple;
 text-align: center;
}
label{
width: 240px;
display: inline-block;
text-align: left;
}

form{
 text-align: center;
 color: black;
 font-family: verdana;
 font-size: 20px;
}

</style>
</head>
<body>
<br/><br/><br/><br/><br/>
<h1><b><u>ENTER THE ID OF THE MEDICINE TO VIEW DETAILS</b></u></h1>
<br/><br/><br/><br/><br/>
<form action="viewmdb.php" method="POST">
<label for="mid"><b>MEDICINE ID:</b></label>
<input type="text" name="mid" autocomplete="off" required>
<br/><br/><br/>
<input type="submit" name="submit" value="VIEW">
</form>
</body>
</html>