<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'carservice') or die(mysqli_error($con));
$sql="SELECT * FROM battery";
$records=mysqli_query($con,$sql);
?>
<html>
<head>
	<title>Battery</title>
	<style>
		button[type=submit]:hover{
      background: blue;
      opacity: 0.7;
    }
    .but{
      width: 10%;
    }
    body {
    background: url('https://images.unsplash.com/photo-1579546929518-9e396f3cc809?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjI0MX0&auto=format&fit=crop&w=500&q=60');
    background-repeat: no-repeat;
    
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
button[type=submit]
    {
      width: 100%;
      box-sizing: border-box;
      padding: 10px 0;
      margin-top: 30px;
      outline: none;
      border: none;
      background: grey;
      opacity: 0.7;
      border-radius: 20px;
      font-size: 20px;
      color: black;

    }
    button[type=submit]:hover{
      background: blue;
      opacity: 0.7;
    }

	</style>
</head>
<body>
	
	<table width="1350px" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<b>
			<th>NAME</th>
			<th>MOBILE</th>
			<th>EMAIL</th>
			<th>ADDRESS</th>
			<th> CAR_MODEL</th>
			<th>CAR_TYPE </th>
			<th>VEH_NO </th>
			<th> MESSAGE</th>
			<th>PICKUP </th>
			<th> DELIVERY</th>
			
		</b>

		</tr>
		<?php
		while ($reg=mysqli_fetch_assoc($records)) {
			echo "<tr>";

			echo "<td>".$reg['name']."</td>";
			echo "<td>".$reg['mobile']."</td>";
			echo "<td>".$reg['email']."</td>";
			echo "<td>".$reg['address']."</td>";
			echo "<td>".$reg['car_model']."</td>";
			echo "<td>".$reg['car_type']."</td>";
			echo "<td>".$reg['veh_no']."</td>";
			echo "<td>".$reg['message']."</td>";
			echo "<td>".$reg['pickup']."</td>";
			echo "<td>".$reg['delivery']."</td>";
			echo "</tr>";
		}
		?>
	</table>
	 <div class="but">
<a href="admin.html">
 
<button type ="Submit" value="submit">BACK</button></a>
</div>

</body>
</html>