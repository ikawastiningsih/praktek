<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
function Prima($n)
	{
		if($n==1)
		{
			return false;
		}
		elseif ($n == 2 || $n ==3) 
		{
			return true;
		}
		else 
		{
			$prima = true;
			for($i=2; $prima && $i*$i<=$n;$i++)
			{ 
				$prima = $n % $i;
			}
			return $prima;
		}
	} 
 function cetak($nilai1, $nilai2)
 {
 		echo "Bilangan prima dari $nilai1 sampai $nilai2 <br>";
	for ($i = $nilai1; $i<=$nilai2;$i++)
	{
		if(Prima($i))
			{
				echo $i . " ";
			}
	}
 }
$nilai1 = $_POST["nilai1"];
$nilai2 = $_POST["nilai2"];

	/*for ($i = $n1; $i<=n2;$i++);
	{$prima = true;
	for($i=2; $n1<$n2;$i++)
                {
                    if($n2%$i == 0)
                        $prima = false;
                }
            if($prima)
            	 echo "$n2 ";
        }*/
  
     // looping
	/*echo "Bilangan prima dari $nilai1 sampai $nilai2 <br>";
	for ($i = $nilai1; $i<=$nilai2;$i++)
	{
		if(Prima($i))
			{
				echo $i . " ";
			}
	}*/
	// di cek masing masing bilangan satu persatu dari n1 dan n2. Jika i bilangan prima cetak i. parameternya cuma satu bilangan karna semua bilangan dimasukkan ke i. fungsi prima mengambil suau bilangan.
	
	?>
	<div class="form-group row"> 
		<div class="col-sm-3"></div>
		<div class="col-sm-6" align="center">
		<?php
		cetak($nilai1, $nilai2)
		?>
		</div>
		<div class="col-sm-3"></div>
	</div>
	
	<form class="form-horizontal" method="POST" action="deretprima.php">
	<div class="form-group row"> 
		<div class="col-sm-9" align="right">
			<button type="submit" name="submit" class="btn btn-success" value="Tampil">Kembali
			</button>
		</div>
	</div>
	</form>
	

<!-- 	/*{$prima = true;
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
	}*/
	/*
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
	}	*/
		
/*echo "1. ".  $b1 ."<br>";
echo "2. ".  $b2 ."<br>";
echo "3. ".  $b3 ."<br>";*/
 -->