<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
$link = mysqli_connect("localhost", "root", "", "Furdos");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$Name = mysqli_real_escape_string($link, $_POST['Name']);
$Email = mysqli_real_escape_string($link, $_POST['Email']);
$Phone = mysqli_real_escape_string($link, $_POST['Phone']);
// attempt insert query execution
$sql = "INSERT INTO Newsletter (Name, Email, Phone) VALUES ('$Name','$Email','$Phone'  )";
if(mysqli_query($link, $sql)){
    echo '<script type="text/javascript">alert("You have been booked in."); window.location.href="index.html";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>