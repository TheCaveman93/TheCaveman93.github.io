<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 

$db_name="Furdos"; // Database name 
$tbl_name="Login"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['Username']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $Login WHERE Username='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("Username");
session_register("Password"); 
header("location:adminpage.php");
}
else {
echo "Wrong Username or Password";
}
?>