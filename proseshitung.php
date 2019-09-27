<?php
$awal = $_POST["awal"];
$akhir = $_POST["akhir"];
$b1="";
$b2="";
$b3="";
	for($i=$awal; $i<=$akhir; $i++){
		if($i % 3==0 && $i % 5!=0)
		{
		$b1 = $b1 . $i . " ";
		}
		elseif($i %5 == 0 && $i % 3!=0)
		{ 
		$b2 = $b2 . $i . "  ";
		}
		elseif($i %5 == 0 && $i % 3==0)
		{ 
		$b3 = $b3 . $i . "  ";
		}
		
}
echo "1. ".  $b1 ."<br>";
echo "2. ".  $b2 ."<br>";
echo "3. ".  $b3 ."<br>";
?>