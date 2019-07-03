<?php

include("koneksi.php");
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$useredit = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form edit</title>

    <link href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/mystyle.css">
	<script type="text/javascript" src="/assets/bootstrap-4.3.1-dist/bootstrap.min.js"></script>
</head>

<body class="body2">
	<div class="row pull-right">
		<div class="m-auto">
			<div class="card mt-5">
				<div class="card-body">
				    <form action="updateprocess.php" method="POST">
				    	<h4><center>Edit Profile Anda</center></h4>
				    	<hr>
				        <fieldset>
				            <input type="hidden" name="id" value="<?php echo $useredit['id'] ?>" />
					        <p>
					            <label for="email">Email : </label>
					            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $useredit['email'] ?>" />
					        </p>
					        <p>
					            <label for="username">Username : </label>
					            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $useredit['username'] ?>" />
					        </p>
					        <p>
					            <label for="password">Password : </label>
					            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $useredit['password'] ?>" />
					        </p>
					        <p>
					            <input type="submit" class="btn btn-primary" value="Simpan" name="simpan" /> |
					            <a href="index.php" class="btn btn-success">Cancel</a>
					        </p>

				        </fieldset>
				    </form>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>