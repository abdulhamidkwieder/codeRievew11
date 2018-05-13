<?php  
	ob_start();
	session_start();
	require_once 'db_connection.php';
	$res=mysqli_query($conn, "SELECT * FROM user WHERE user_id=".$_SESSION['user']);
	$userRow= mysqli_fetch_array($res, MYSQLI_ASSOC);
	$sql = "SELECT * FROM car";
	$result = mysqli_query($conn, $sql);
	include_once 'header_navbar.php'
?>
<div id="hero">
	<div class="row">
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/car1.jpg">
					<h3>Easy access</h3>
					<p>Easy access
A new and effective way of using and booking through our website </p>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/img1.jpg" id="special">
					<h3>Easy registration!</h3>
					<p>Register now for Derrina to get a free car from CodeFactory </p>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-4">
				<div class="box">
					<img src="img/img2.png">
					<h3>Fun with the whole family!</h3>
					<p>Share your friends the best moments with us </p>
				</div>
			</div>
		</div>
</div>
	<footer>
  <h3 style="text-align: center;"></br> @ Abdulhamid Kwieder - CodeFactory - 2018  </h3>
</footer>
</body>
</html>
<?php ob_end_flush(); ?>