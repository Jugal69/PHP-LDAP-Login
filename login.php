<?php
session_start();
//session_unset();
?>

<style type="text/css">
table, td, th
 {
   border-collapse:collapse;
   border:1px solid #4499ff;
 }
p, td, th, tr {font-size: 12;}
p,td,th,tr,body {font-family: calibri;}
th {font-weight: 900}
p,td,tr {font-weight: 400}
</style>




<html>
<body>
<form method="post", action="n1.php">
<font size="2" face="Verdana" color="blue">
<center>
<table border="1px" width="600px" cellpadding="5" cellspacing="5" bgcolor="#aabbcc" >
<tr><th colspan="2" align="center"><h3>Welcome to Your Server Name</h3></th></tr>
<tr><th colspan="2" align="center"><b>Description of  service<b></th></tr>
<tr><th width="40%" align="left">User ID</td><td><input type="text" name="uid" size="31">
<tr><th width="40%" align="left">Password</td><td><input type="password" name="pwd" size="31" value="">
<tr><th width="40%" align="left">Captcha </th>
<td align="left"><img src=si/securimage_show.php?sid=<?php echo md5(uniqid(time()));?>></td>
<tr><th width="40%" align="left"> Verifiy Captcha</th>
<td><input type="text" name="cap" size="10"> </td></tr>
<tr><td colspan="2" align="center"> <?
if($_SESSION['capok']==-10) echo "Failed Captcha entry</td></tr>";
else
if ($_SESSION['pwdok']==-10) echo "Invalid User ID and Password</td></tr>";
?>

<tr><td colspan="2" align="center"><input type="submit" name="subxxx" value="Submit"></td></tr>
</table>
</center>
</form>
</body>
</html>
