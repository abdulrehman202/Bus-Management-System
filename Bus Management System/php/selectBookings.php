<?php  
require 'connect.php';
$output = '';
session_start();
$id = $_SESSION['uid'];
echo "$id";  
$sql = "SELECT Departure,Arrival,Date,Time,Meridiem,bookings.Seats As 'Seats' FROM BUS,users, bookings where bookings.custId=users.id and bus.id=bookings.busId and users.id=$id";  

$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

$output .= '  
<div class="table-responsive form-label">  
<table class="table table-bordered">  
<tr>  
<th width="25%">Departure</th>  
<th width="25%">Arrival</th> 
<th width="15%">Date</th>  
<th width="15%">Time</th>  
<th width="10%">Meridiem</th> 
<th width="10%">Seats</th>     
</tr>';  
if($q)
{  
  while ($row = $q->fetch())  
  {  
   $output .= '  
   <tr>   
   <td>'.$row["Departure"].'</td>  
   <td>'.$row["Arrival"].'</td>
   <td>'.$row["Date"].'</td>  
   <td>'.$row["Time"].'</td>  
   <td>'.$row["Meridiem"].'</td>  
   <td>'.$row["Seats"].'</td>  
    </tr>';  
 }  
 // $output .= '  
 // <tr>  
 // <td></td>  
 // <td id="first_name" contenteditable></td>  
 // <td id="last_name" contenteditable></td>  
 // <td><button type="button" name="btn_add" id="btn_add" 

 // class="btn btn-xs btn-success">+</button></td>  
 // </tr>  
 // ';  
}  
else  
{  
  $output .= '<tr>  
  <td colspan="4">Data not Found</td>  
  </tr>';  
}  
$output .= '</table>  


</div>';  
echo $output;  
?>