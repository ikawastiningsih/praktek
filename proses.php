<style type="text/css">
	.button {
  background-color: #b34700;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  border-radius: 8px;
}
</style>
<?php
error_reporting(0);
	$np = $_POST["np"];
	$pg = $_POST["pg"];
	$hadir = $_POST["hadir"];
	$sikap = $_POST["sikap"];

	if ($np < 0 || $np >100) {
		echo 'Nilai Praktek = Tidak Valid<br>
		Silahkan Input Nilai yang Valid';
	}
	elseif ($og < 0 || $pg >100) {
		echo 'Nilai Pilihan Ganda = Tidak Valid<br>
		Silahkan Input Nilai yang Valid';
	}
	elseif ($hadir < 0 || $hadir >100) {
		echo 'Kehadiran = Tidak Valid<br>
		Silahkan Input Nilai yang Valid';
	}
	elseif ($sikap < 0 || $sikap >100) {
		echo 'Sikap = Tidak Valid<br>
		Silahkan Input Nilai yang Valid';
	} 
	else
	{
	echo "Nilai Praktek: $np<br>";
	echo "Nilai Pilihan Ganda: $pg<br>";
	echo "Kehadiran: $hadir<br>";
	echo "Sikap: $sikap<br>";
	$nilai_akhir = (0.6*$np)+(0.3*$pg)+(0.05*$hadir)+(0.05*$sikap);	
	}

	
	
	echo "<br>";
	echo "Nilai Akhir Anda = $nilai_akhir";
	echo "<br>";

	if ($nilai_akhir >= 90 || $nilai_akhir == 100) {
		echo "Keterangan:";
		echo $nilai = "Baik Sekali";
	}
	elseif ($nilai_akhir >= 79 || $nilai_akhir == 89) {
		echo "Keterangan:";
		echo $nilai = "Baik";
	}
	elseif ($nilai_akhir >= 6 || $nilai_akhir == 79) {
		echo "Keterangan:";
		echo $nilai = "Cukup";
	}
	elseif ($nilai_akhir >= 0 || $nilai_akhir == 64) {
		echo "Keterangan:";
		echo $nilai = "Tidak Lulus";
	}
	
	
?>
<br>
<br>
<br>
<a href ="nilai.php">Kembali</a>