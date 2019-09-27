<title>Cek Bilangan Prima</title>
<?php

$n = $_POST["n"];
if ($n == 1) {
	echo $n . "bukan bilangan prima";
}
elseif ($n == 2 || $n == 3){
	echo $n . "adalah bilangan prima";
}
else //n>3
{$prima = true;
	for($i=2;$prima && $i * $i<=$n;$i++)
	{
		$prima= $n % $i;
	}
	if($prima){
		echo $n. " adalah bilangan prima";
	}
	else{
		echo $n . " bukan bilangan prima";
	}
}
// $bilangan = $_POST["isi"];
// $n = $bilangan; 
// $status = "PRIMA";

// $i = 2;
// while ($i <= $n-1)
// {
// 	$i++;
// }
// if ($n % $i == 0)
// {
// $status = "TIDAK PRIMA";
// break;
// $n="";
//}

// for ($i = 2; $i <= $n-1; $i++)
// {
// if ($n % $i == 0)
// {
// $status = "TIDAK PRIMA";
// break;
// }
// }
// echo "Bilangan ".$n." adalah : ".$status;
// echo "<br/> <a href='form.php'>Cek Lagi</a>";
?>