<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("OSPASSNG",$con);
$uname=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$rpass=$_POST['rpassword'];
$query="insert into users values('$uname','$email','$pass')";
if(mysql_query($query,$con))
{
echo '<html><head></head><body><h2 align="center">Succesfully registered </h2><form method=POST action="signin.html">';
echo '<p align="center"><input type="submit" value="Click here to go to Login page">';
echo '</p></form></body></html>';
}
else
{
echo '<html><head></head><body><h2 align="center">Registrstion Unsuccessful</h2></body></html>';
}
?>