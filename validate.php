<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("OSPASSNG",$con);
$uname=$_POST['user'];
$pass=$_POST['password'];
$query="select * from users";
$flag=0;
$res=mysql_query($query);
while($sample=mysql_fetch_row($res))
{
if($sample[0]==$uname && $sample[2]==$pass)
$flag=1;
else
$flag=0;
}
if($flag==1)
{
echo '<html><head></head><body><h2 align="center">Welcome ';
echo $uname;
echo '</h2><form action="http://127.0.0.1:1337"><p align="center"><input type="submit" value="Start Chat"></form></body></html>' ;
}
else
{
echo '<html><head></head><body><h2 align="center">Invalid Crentials</h2><form action="signin.html"><p align="center"><input type="submit" value="Go back"></form></body></html>';
}
?>