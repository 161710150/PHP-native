<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="refresh" content="3;url=localhost:8000/index.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
    <script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
  </head>
  <body>
  	<?php include "koneksi.php";
  		$result = mysqli_query($db, "SELECT * FROM user");
  	?>

  	<?php
			session_start();
			if(!isset($_SESSION['username'])) {
				header('location:login.php');
			}else {
				$Email 		= $_SESSION['email'];
				$username = $_SESSION['username'];
			}
		?>
		<div class="row pull-right">
			<div class="m-auto">
				<div class="card mt-5">
					<div class="card-body">
						<form>
							<?php while ($res = mysqli_fetch_array($result)) { ?>
								<h3><center>Hai</center><p>Selamat Datang <u><?php echo $res['username'] ?></u></p></h3>
								<hr>
								<center>
									<h4>Profile Anda</h4>
									<img src="/assets/img/user.png" style="width: 150px; height: 150px; margin-bottom: 20px">
								</center>
									<label style="margin-bottom: 10px" class="form-control">
										Email <font style="margin-left: 35px">: </font><?php echo $res['email'] ?>
									</label>
									<label style="margin-bottom: 10px" class="form-control">
										Username : <?php echo $res['username'] ?>
									</label>

									<?php echo "<a class='btn btn-primary' href='getedit.php?id=".$_SESSION['id']."'>Edit</a> | "; ?>
									<a href="logout.php" class="btn btn-danger">Logout</a>	
									<?php } ?>						
						</form>
					</div>
				</div>
			</div>
		</div>
  </body>
 </html>
