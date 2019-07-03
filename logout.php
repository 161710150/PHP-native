<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keluar</title>

    <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
	<script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
  </head>
  <body>
  	<?php
		session_start();
		session_destroy();
	?>

	<div align="center" style="margin-top: 150px;" class="pull-right">
		<h1>Sampai Jumpa Lagi...</h1>
		Klik <a href="login.php" class="btn btn-primary">disini</a> untuk Login
	</div>
  </body>
</html>
