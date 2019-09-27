<head>
<title>Bilangan Prime </title>
</head>
<body>
	<form action ="prima2.php" method="POST">
<h2>MENENTUKAN BILANGAN PRIMA ATAU BUKAN</h2>
Masukkan Nilai yg ingin di cek :
 <input type="text" size="20" name="n" required>

<input id="mhs" type="submit" value="Hasil">


</form>
<!-- <?php
// if (isset($_POST['submit'])){
// $bilangan = $_POST["isi"];
// 	$n = $bilangan; 
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
// }
// $a = $_POST["isi"];
// $b ="";

// $i=$a;
// while ($i){

// 	$t=0;
// 	}
// 	$j=1;
// 	while ($j<=$i) {
// 		$j=9;
// 		# code...
// 	}
// 	if ($t == 2) {   // syarat atau kondisi bilangan prima
//         // echo ""$i"bilangan prima,";
//          echo("bilangan prima ");
//  echo($i);
//     }
 //    else ($t != 2){
 //    	// echo ""$i"bukan bilangan prima,";
 //    	 echo("bukan bilangan prima");
 // echo($i);
 //    }

// if (isset($_POST['submit'])){
// for ($i=1; $i <= 50 ; $i++) {     // for 1, adalah bilangan yang akan di cek

//     $t = 0; 

//         for ($j=1; $j <= $i ; $j++) {  // for 2, bilangan pembagi

//             if ($i % $j == 0) {
//                 $t++;
//             }
          
//         }

//     if ($t == 2) {   // syarat atau kondisi bilangan prima
//         echo "".$i.",";
//     }
// }
// $i == $_POST['isi'];
// $i = 2;
// echo "Bilangan ".$n." adalah : ".$status;
// }

 ?>
int prima(int n){

   int i,j;
   for(i=2;i<=n;++i){
      int flag = 0;
      
      if(i % 2 !=0 ){                         
        //cek dari 3 saja, krena 1 sdh pasti faktor pembaginya
        for(j=3;j<=(int)ceil(sqrt(i));++j){
             
             /*check apakah i habis dibagi j, 
                jika ya maka flag++ artinya bkn prima*/
             if(i % j ==0){                                
                flag++;               
             }                             
        }           
               
       }else{
         
         if(i!=2)
            flag++;
       }
          
       if(flag==0){          
           printf("Bil %d  = prima \n",i);
       }     
   }
}
 function prima($n){
  
      for($i=1;$i<=$n;$i++){  //smw angka yg akan di cek
              
              $counter = 0; 
              for($j=1;$j<=$i;$j++){ //smw kemungkinan faktor pembagi
                  
                    //jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1
                    if($i % $j==0){ 
                        
                          $counter++;
                    }
              }
            
           //jumlah warna hijau / faktor habis bagi nya harus 2 
            if($counter==2){
                 
                   print $i." is Prime <br/>";
            }
     }
}  -->

<!-- prima(20);  //cari bilang prima dari 1-20 -->

</body>
</html> 