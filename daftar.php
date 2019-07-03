<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Member</title>

    <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
	<script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
  </head>
    <body>
	  	<?php 
			session_start();
			if (isset($_SESSION['username'])) {
				header('location:index.php');
			}
		?>
	  	<div class="row pull-right">
			<div class="m-auto">
				<div class="card mt-5">
					<center>
						<div class="card-body">
							<form action="daftarproses.php" method="post">
								<h3>Daftar Member</h3>
								<div class="form-group">
				                    <input type="text" class="form-control" name="email" placeholder="Example@gmail.com">
				                </div>
				                <div class="form-group">
				                    <input type="text" class="form-control" name="username" placeholder="Username">
				                </div>
				                <div class="form-group">
				                    <input type="password" class="form-control" name="password" placeholder="Password">
				                </div>
				                <input class="tombol-submit" type="submit" value="Daftar"> <input type="reset" class="tombol-batal" value="Batal">
				                <p style="margin-top: 20px;">
				                Sudah Menjadi Member ? <a href="login.php"><b>Masuk</b></a>
							</form>
						</center>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>