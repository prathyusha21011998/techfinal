<?php
$servername="localhost"
$username="root"
$password="root"
$dbname="donors"
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn->connect_error)
	echo "Connection failed $conn->connect_error";
else
	$sql="INSERT into donor(name,age,address,email,phno,bloodgroup,gender) values ('$_POST[name]','$_POST[age]','$_POST[add]','$_POST[email]','$_POST[phno]','$_POST[bg]','$_POST[g]')";
if(!mysql_query($sql,$conn))
{
die('error'.mysql_error());
}
php?>