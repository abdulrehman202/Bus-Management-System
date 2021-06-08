$(document).ready(function() {
	function fetch_data()  
	{  
		$.ajax({  
			url:"../php/selectBookings.php",  
			method:"POST",  
			success:function(data){  
				$('#live_data').html(data);  
			}  
		});  
	} 
	fetch_data();

});