<?php  
	ob_start();
	session_start();
	require_once 'db_connection.php';
	$res=mysqli_query($conn, "SELECT * FROM user WHERE user_id=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
	$allcars = "SELECT cartype.type,cars_location.location FROM cartype
				inner JOIN car ON cartype.cartype_id= car.fk_cartype_id 
				INNER JOIN cars_location ON car.fk_location_id = cars_location.location_id;
				";
	$result = mysqli_query($conn, $allcars);
	$location = "SELECT * FROM car_location";
	$location_result = mysqli_query($conn, $location);
	$cars1 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 1";
	$cars2 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 2";
	$cars3 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 3";
	$cars4 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 4";
	$cars5 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 5";
	$cars6 = "SELECT COUNT(*) FROM `car` WHERE fk_location_id = 6";
	$cars1_result = mysqli_query($conn, $cars1);
	include_once 'header_navbar.php'
?>
	<div class="container">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Model</th>
						<th scope="col">Location</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while ($row = mysqli_fetch_assoc($result)) {
							echo 
								" 
								<tr>
									<td>".$row["type"]."</td>
									<td>".$row["location"]."</td>
								</tr>
								";
						};
					?>
				</tbody>
			</table>
		</div>
	</div>
	<footer>
  <h3 style="text-align: center;"></br> @ Abdulhamid Kwieder - CodeFactory - 2018  </h3>
</footer>
</body>
</html>
<?php ob_end_flush(); ?>