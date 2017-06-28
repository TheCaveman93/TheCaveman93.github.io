<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "Furdos");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM booking1 
  WHERE Name LIKE '%".$search."%'
  OR Email LIKE '%".$search."%' 
  OR Phone LIKE '%".$search."%' 
  OR SelectedTreatment LIKE '%".$search."%' 
  OR BookingDate LIKE '%".$search."%'
  OR Booking_Time LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM booking1 ORDER BY CustomerID
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Selected Treatment</th>
     <th>Booking Date</th>
     <th>Booking Time</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Name"].'</td>
    <td>'.$row["Email"].'</td>
    <td>'.$row["Phone"].'</td>
    <td>'.$row["SelectedTreatment"].'</td>
    <td>'.$row["BookingDate"].'</td>
    <td>'.$row["Booking_Time"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>