<?php  
require 'connect.php';
$output = '';  
$sql = "SELECT * FROM bus 

ORDER BY id DESC";  
$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);

$output .= '  
<div class="table-responsive form-label">  
<table class="table table-bordered">  
<tr>  
<th width="10%">Id</th>  
<th width="20%">Departure</th>  
<th width="20%">Arrival</th> 
<th width="10%">Date</th>  
<th width="10%">Time</th>  
<th width="10%">Meridiem</th> 
<th width="10%">Seats</th>     
<th width="10%">Delete</th>  
</tr>';  
if($q)  
{  
  while ($row = $q->fetch())  
  {  
   $output .= '  
   <tr>  
   <td>'.

   $row["id"].'</td>  
   <td class="Departure" data-id1="'.$row["id"].'" contenteditable>'.$row["Departure"].'</td>  
   <td class="Arrival" data-id2="'.$row["id"].'" contenteditable>'.$row["Arrival"].'</td>
   <td data-id3="'.$row["id"].'">'.$row["Date"].'</td>  
   <td data-id4="'.$row["id"].'">'.$row["Time"].'</td>  
   <td data-id5="'.$row["id"].'">'.$row["Meridiem"].'</td>  
   <td class="seats" data-id6="'.$row["id"].'" contenteditable onkeypress=\'return event.charCode >= 48 && event.charCode <= 57\'>'.$row["Seats"].'</td>  

   <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td></tr>';  
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