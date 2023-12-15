<html>
<head>
<title>addition of stock details</title>
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
<br/><br/><br/>
<h1><center><u>ADD THE STOCK DETAILS</center></u></h1>
<br/>
<br/>
<form action="addstdb.php" method="POST" align="center">
<label for="stid"><b>STOCK ID:</b></label>
<input type="text" name="stid" autocomplete="off">
<br/>
<br/>
<label for="stname"><b>STOCK NAME:</b></label>
<input type="text" name="stname" autocomplete="off" required>
<br/>
<br/>
<label for="quan"><b>QUANTITY:</b></label>
<input type="text" name="quan" autocomplete="off" required>
<br/>
<br/>
<label for="ppi"><b>PRICE PER ITEM:</b></label>
<input type="text" name="ppi" autocomplete="off" required>
<br/>
<br/>
<label for="tc"><b>TOTAL COST:</b></label>
<input type="text" name="tc" autocomplete="off" required>
<br/>
<br/>
<label for="manu"><b>MANUFACTURE DATE:</b></label>
<input type="date" name="manu" autocomplete="off" required>
<br/>
<br/>
<label for="exp"><b>EXPIRY DATE:</b></label>
<input type="date" name="exp" autocomplete="off" required>
<br/>
<br/>
<label for="type"><b>TYPE:</b></label>
<select name="type" id="type" autocomplete="off" required>
  <option value="tablet">TABLET</option>
  <option value="capsule">CAPSULE</option>
  <option value="liquid">LIQUID</option>
  <option value="drops">DROPS</option>
  <option value="inj">INJECTIONS</option>
  <option value="other">OTHERS</option>
</select>
<br/>
<br/>
<input type="reset" value="RESET">
<input type="submit" name="submit" value="SUBMIT">
</form>
</body>
</html>