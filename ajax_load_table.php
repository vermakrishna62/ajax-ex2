<?php  

$conn = mysqli_connect('localhost','root','','login_record_system');

$output = '<table id="table_data" class="table table-bordered table-hover mt-3 table-sm">
				<thead class="bg-info">
					<th style="width: 40px; text-align: center;">ID</th>
					<th style="width: 400px; text-align: center;">NAME</th>
					<th style="width: 80px;text-align: center;">AGE</th>
					<th style="width: 80px;text-align: center;">GENDER</th>
				</thead>
				<tbody class="bg-info">
		  ';

$sql = "SELECT * FROM login_data";		

$ret_val = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($ret_val))
{
	$output.="<tr>
				<td style='width: 40px;'>{$row['id']}</td>
				<td style='width: 400px;'>{$row['name']}</td>
				<td style='width: 80px;'>{$row['age']}</td>
				<td style='width: 80px;'>{$row['gender']}</td>
			  </tr>
			 ";
}

$output.="</tbody></table>";

echo $output;		

?>