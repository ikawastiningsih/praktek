<?php  ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Deret Bilangan Prima</title>
</head>
<body>
	<div class="container"><br><br><br>

		<h2>Deret Bilangan Prima</h2>
		
		<hr>

		<form class="form-horizontal" method="POST" action="bilprim.php">
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Masukan Batas Atas :</label>
					<div class="col-sm-6 	">
						<input type="number" name="nilai1" class="form-control" placeholder="Masukkan Angka">
					</div>
			</div>
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Masukan Batas Bawah :</label>
					<div class="col-sm-6 	">
						<input type="number" name="nilai2" class="form-control" placeholder="Masukkan Angka">
					</div>
			</div>
			<div class="form-group row"> 
				<label class="control-label col-sm-3" for="email"></label>
				<div class="col-sm-6">
					<button type="submit" name="submit" class="btn btn-primary" value="Tampil">Tampil</button>
				</div>
			</div>
		</form>
		<form class="form-horizontal" method="GET">
		
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>