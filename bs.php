<?php  ?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Latihan 2</title>
</head>
<body>
	<div class="container"><br><br><br>

		<h2>Latihan 2</h2>
		
		<hr>

		<form class="form-horizontal" method="GET">
			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">Masukan Jumlah Data :</label>
				<div class="col-sm-6 	">
					<input type="number" name="n" class="form-control" id="email" placeholder="Jumlah Data">
				</div>
			</div>
			<div class="form-group row"> 
				<label class="control-label col-sm-3" for="email"></label>
				<div class="col-sm-6">
					<button type="submit" name="submit" class="btn btn-primary" value="Proses">Proses</button>
				</div>
			</div>
		</form>
		<form class="form-horizontal" method="GET">
		<?php 

	if (isset($_GET['submit'])){

		$n = $_GET['n'];
		for($i = 1; $i <= $n;$i++){

			?>

			<div class="form-group row">
				<label class="control-label col-sm-3" for="email">T <?php echo $i; ?> :</label>
				<div class="col-sm-6 	">
					<input type="number" name="t<?php echo $i ?>" class="form-control" id="email" placeholder="Jumlah Data">
				</div>
			</div>

			<?php 
			}
		 ?>
		<input type="hidden" name="n" class="form-control" value="<?php echo $n;?>">
			<div class="form-group row"> 
				<label class="control-label col-sm-3" for="email"></label>
				<div class="col-sm-6">
					<button type="submit" name="proses_loop" class="btn btn-primary" value="proses_loop">Proses</button>
				</div>
			</div>
		</form>

		<?php 
	
		}
		if (isset($_GET['proses_loop'])) {
		 
		$n = $_GET['n'];
		// echo "<h2>Hasil</h2>";
		$ix= "";
		$in = ""; 
	?>
		<div class="row">
		<div class="col-md-6">
			<h2>Data Suhu</h2>
			<hr>
	
	<?php 
		for($j = 1; $j <= $n; $j++){
			$T[$j] = $_GET['t'.$j];
			
			?>
			
			Suhu ke - <?php echo $j; ?> = <?php echo $T[$j]; ?>
			<hr>

			<?php 

			if ($T[$j] ==  max($T)) {
				$ix = $j;
			}
			if ($T[$j] == min($T)) {
				$in = $j;
			}

			// echo "Suhu ".$j." = ".$T[$j]."<br>";
			
		}
		$rata = array_sum($T) / count($T);
		$max = max($T);
		$min = min($T);
		
		// echo "<br>Rata - Rata = ".$rata."<br>";
		// echo "Maximum = ".$max." pada suhu ke- ".$ix."<br>";
		// echo "Minimum = ".$min." pada suhu ke- ".$in."<br>";
	?>
</div>
	<div class="col-md-6">
		<h2>Hasil</h2>
		<hr>
		Rata - Rata = <?php echo $rata; ?>
		<hr>
		Nilai Max = <?php echo $max; ?> Pada Suhu Ke - <?php echo $ix; ?> 
		<hr>
		Nilai Min = <?php echo $min; ?> Pada Suhu Ke - <?php echo $in; ?>	
		<br><br>
		<a href="suhu.php" class="btn btn-primary">Refresh Page</a>
		</div>
	</div>

	<?php }  ?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>