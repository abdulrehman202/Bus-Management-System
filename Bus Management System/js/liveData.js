$(document).ready(function() {
	function fetch_data()  
	{  
		$.ajax({  
			url:"../php/selectBuses.php",  
			method:"POST",  
			success:function(data){  
				$('#live_data').html(data);  
			}  
		});  
	} 

	function edit_data(id, text, column_name)  
	{  
		$.ajax({  
			url:"../php/updateDataSql.php",  
			method:"POST",  
			data:{id:id, text:text, column_name:column_name},  
			dataType:"text",  
			success:function(data){  
				// alert(data);  
			}  
		});  
	}  

	$(document).on('blur', '.Departure', function(){  
		var id = $(this).data("id1");  
		var departure = $(this).text();  
		edit_data(id, departure, "Departure");  
	});

	$(document).on('blur', '.Arrival', function(){  
		var id = $(this).data("id2");  
		var arrival = $(this).text();  
		edit_data(id, arrival, "Arrival");  
	});

	$(document).on('blur', '.seats', function(){  
		var id = $(this).data("id6");  
		var seats = $(this).text();  
		edit_data(id, seats, "seats");  
	});

	$(document).on('click', '.btn_delete', function(){  
		var id=$(this).data("id7");  
		if(confirm("Are you sure you want to delete this?"))  
		{  
			$.ajax({  
				url:"../php/deleteBus.php",  
				method:"POST",  
				data:{id:id},  
				dataType:"text",  
				success:function(data){  
					// alert(data);  
					fetch_data();  
				}  
			});  
		}  
	});  

	fetch_data();

});