<html>
<head></head>
<body><b>hello fucker</b></body>

</html>


<?php

session_start();

echo "Hello 0";

require_once("con.php");

if(isset($_POST['subxxx']))
{
echo "Hello 1";


if (strlen(trim($_POST['uid'])) && strlen(trim( $_POST['pwd'])))
{
echo "Hello 2";

include ("si/securimage.php");

$img= new Securimage();

echo "Hello 3";


$valid = true;
$_SESSION['capok']=-10;
	if ($valid == true)
	{
	echo "Hello 4";

	$_SESSION['capok']=1;

	$filter="(uid=".trim($_POST['uid']).")";
	echo "Hello 5";		

	$dn="ou=people,dc=fragnel,dc=edu,dc=in";
	$justthese = array("sn","givenname","uid","userpassword");
		echo "Hello 6";		
		
	$data = ldap_search($ldapconn, $dn,$filter,$justthese);
	echo "Hello 7";		

	$info= ldap_get_entries($ldapconn,$data);

	echo "Hello 8";

	$info_list = explode(',', $info[0]["dn"]);
	echo "Hello 9";

	$_SESSION['whou']=$info_list[1];
	echo "Hello 10";

	$epwd = substr($info[0]["userpassword"][0],7);
	echo "Hello 11";

	if(!strcmp(crypt(trim($_POST['pwd']),$epwd),$epwd))
		{
			echo "Hello 12";

		$_SESSION['pwdok']=1;
		$_SESSION['sn']=$info[0]["sn"][0] ;
		$_SESSION['givenname']= $info[0]["givenname"][0] ;
		$_SESSION['uid']= $info[0]["uid"][0];
		echo "Hello 13";
		echo $_POST['uid'];
		header("Location: n2.php");

		}else{	header("Location: login.php");}
	}else{	header("Location: login.php");}
}else{	header("Location: login.php");}
}else{	header("Location: login.php");} 
?>

