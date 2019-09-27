<style type="text/css">
  .button {
  border: 1px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
  background-color: #801515;        /* ubah warna background */
  color: #FFFFFF;                   /* ubah warna font */
  font-size: 15px;                  /* ubah ukuran font */
  width: 60px;                     /* set panjang button. ukuran width = ukuran height */
  height: 40px;                    /* set tinggi button. ukuran width = ukuran height */
  line-height: 3px;                /* set line height = font size */
  text-align: center;               /* text posisi center */
  border-radius: 10%;               /* set radius sudut pada button */
}
            /* ubah background saat button ditekan */

</style>
<html lang="en">
<head>
	
<title>Latihan Array</title>
</head>
<body>
	<h2>Latihan Array</h2>
	<hr>

		<form class="form-horizontal" method="GET">
		<table width="50%" border=0>
        <tr>
          <td>Masukan Jumlah Data :</font></td>
          <td></td>
          <td><input type="number" name="n"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Input" class="button"></td>
        </tr>
      </table>
				
		<form class="form-horizontal" method="GET">
		<?php 

	if (isset($_GET['submit'])){

		$n = $_GET['n'];
		for($i = 1; $i <= $n;$i++){

			?>

				<table width="50%" border=0>
			    <tr>
			      <td>Masukkan Suhu <?php echo $i; ?> :</font></td>
			      <td></td>
			      <td><input type="number" name="t<?php echo $i ?>"></td>
			    </tr>

			  </table>

			<?php 
			}
		 ?>
		<input type="hidden" name="n" class="form-control" value="<?php echo $n;?>">
			
		<button type="submit" name="loop" class="button" value="proses_loop">Proses</button>
				

		<?php 
	
		}
		if (isset($_GET['loop'])) {
		 
		$n = $_GET['n'];
		// echo "<h2>Hasil</h2>";
		$ix= "";
		$in = ""; 
	?>
		<div class="row">

			<h2>Data Suhu</h2>
			
	
	<?php 
		for($j = 1; $j <= $n; $j++){
			$T[$j] = $_GET['t'.$j];
			
			?>
			
			Suhu - <?php echo $j; ?> = <?php echo $T[$j]; ?>
			<br>

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
		
		
	?>
</div>
	<div class="col-md-6">
		<hr>
		<h2>Hasil</h2>
		<br>
		Rata - Rata = <?php echo $rata; ?>
		<br>
		Nilai Max = <?php echo $max; ?> 
		<br>
		Nilai Min = <?php echo $min; ?> 
		<br>
		</div>
	</div>

	<?php }  ?>
		
	</body>
	</html>