<?php
$dbemail="deepthi@gmail.com";
$dbNewpassword="123456";
$emailid=$_GET["emailid"];
$newpassword=$_GET["newpassword"];
if($dbemail==$emailid)
{
	echo "emailid is present in our database";
}
else
{
	echo "emailid is not present in our database please create account";
	exit();
}
?>
