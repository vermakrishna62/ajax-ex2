<!DOCTYPE html>
<html>
<head>
	<title>AJAX Show Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery_cdn.js"></script>
</head>
<body>
<div class="container">

	<div class="row">
		<div class="col bg-dark text-light">
			<h2 class="text-center m-2">ALL RECORDS</h2>
		</div>
	</div>

	<!-- <div class="row">
		<div class="col bg-primary">
			<center>
				<input style="font-size: 20px; letter-spacing: 2px;" type="button" class="btn btn-success m-2 " value="Load data" id="load_data">
			</center>
		</div>
	</div>
 -->
	<div class="row">
		<div class="col bg-warning">
			<br>
			<label><h4>Name :-</h4></label> 
			<input type="name" id="name">&nbsp;&nbsp;&nbsp;&nbsp;
			<label><h4>Age :- </h4></label>&nbsp;&nbsp;&nbsp;
			<input style="width: 80px;" type="number" id="age">
			&nbsp;&nbsp;&nbsp;&nbsp;
			<br><br>
			<center>
				<input type="submit" class="btn btn-primary" value="SUBMIT" id="submit_btn">
			</center>
			<br><br>
		</div>
	</div>

	<div class="row" >
		<div class="col bg-secondary">
			<table id="table_data" class="table table-bordered table-hover mt-3 table-sm">
				
			</table>
		</div>
	</div>


</div>

	
<script type="text/javascript">

	$(document).ready(function()
	{
		function load_table()
		{
			$.ajax({
				url : 'ajax_load_table.php',
				type : 'POST',
				success : function (data)
				{
					$('#table_data').html(data);
				}
			});
		}

		load_table();

		$("#submit_btn").on("click",function(e)
			{
				e.preventDefault();
				var stu_name = $("#name").val();
				var stu_age = $("#age").val();
				var gender = $("#gender").val();

				console.log(stu_name);
				console.log(stu_age);

				$.ajax({
					url : "ajax_insert_data.php",
					type : "POST",
					data : {name : stu_name, age : stu_age},

					success : function(data)
					{
						if(data == 1)
							load_table();

						else
							alert("Can't save Record");
					}
				});
			});
	});
</script>

</body>
</html>