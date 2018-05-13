<?php  
	ob_start();
	session_start();
	require_once 'db_connection.php';
	$res=mysqli_query($conn, "SELECT * FROM user WHERE user_id=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
	$sql = "SELECT * FROM office";
	$result = mysqli_query($conn, $sql);
	include_once 'header_navbar.php'
?>
	<div class="container">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Address</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while ($row = mysqli_fetch_assoc($result)) {
							echo 
								" 
								<tr>
									<td scope='row'>".$row["office_id"]."</td>
									<td>".$row["address"]."</td>
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