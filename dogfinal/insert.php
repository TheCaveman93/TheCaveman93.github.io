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
$BookingDate = mysqli_real_escape_string($link, $_POST['Date']);
$Booking_Time = mysqli_real_escape_string($link, $_POST['Time']);
$SelectedTreatment = mysqli_real_escape_string($link, $_POST['Selectedtreatment']);
$Name = mysqli_real_escape_string($link, $_POST['Name']);
$Email = mysqli_real_escape_string($link, $_POST['Email']);
$Phone = mysqli_real_escape_string($link, $_POST['Phone']);
// attempt insert query execution
$sql = "INSERT INTO Booking1 (BookingDate, Booking_Time,SelectedTreatment, Name, Email, Phone) VALUES ('$BookingDate','$Booking_Time','$SelectedTreatment','$Name','$Email','$Phone'  )";
if(mysqli_query($link, $sql)){
    echo '<script type="text/javascript">alert("You have been booked in."); window.location.href="index.html";</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
<!--
$sql = "SELECT `tbl_users`.`username`, `tbl_users`.`email`, `book_tbl`.*\n"
    . "FROM `tbl_users`\n"
    . "LEFT JOIN `book_tbl` ON `tbl_users`.`user_id` = `book_tbl`.`user_id`";

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
$BookingDate = mysqli_real_escape_string($link, $_POST['date']);
$Booking_Time = mysqli_real_escape_string($link, $_POST['time']);
$SelectedTreatment = mysqli_real_escape_string($link, $_POST['selectedtreatment']);
$Email = mysqli_real_escape_string($link, $_POST['email']);
$Name = mysqli_real_escape_string($link, $_POST['name']);
$Phone = mysqli_real_escape_string($link, $_POST['phone']);
$Price = mysqli_real_escape_string($link, $_POST['price']);
// attempt insert query execution
$sql = "INSERT INTO Booking1 (BookingDate, Booking_Time,SelectedTreatment,Eamil, Name, Phone) VALUES ('$BookingDate','$Booking_Time','$SelectedTreatment','$Email','$Name''$Phone'   )";
if(mysqli_query($link, $sql)){
    echo '<script type="text/javascript">alert("You have been booked in.");</script>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

$sql = "SELECT `tbl_users`.`username`, `tbl_users`.`email`, `book_tbl`.*\n"
    . "FROM `tbl_users`\n"
    . "LEFT JOIN `book_tbl` ON `tbl_users`.`user_id` = `book_tbl`.`user_id`";
-->
