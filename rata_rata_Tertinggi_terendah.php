<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
 
 error_reporting(0);
 $nilai_awal = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";

 
 function ratarata($word){
	 echo 'Nilai Rata Rata dari bilangan Array [72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86] adalah <br>';
	  $nilai = explode(" ", $word);
	  $jumlah = 0; for ($i = 0; $i <= count($nilai)-1; $i++)  
{    
 $jumlah = $jumlah + $nilai[$i]; // atau bisa dituliskan $jumlah += $bil[$i]; 
 } 
 $rataRata = $jumlah/count($nilai);
 
 return $rataRata;
 
 }
 

 
 
 function trtinggi($word){

 echo 'Nilai terbesar dari bilangan Array [72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86] adalah <br>';

		$nilai = explode(" ", $word);
		rsort($nilai);
		$arrlength =7;
		for($x = 0; $x < $arrlength; $x++) {
		echo $nilai[$x];
		echo "<br>";
		}
 }
 
 function terendah($word){
 echo 'Nilai terendah dari bilangan Array [72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86] adalah  <br>';
	 	$nilai = explode(" ", $word);
		asort($nilai);
		$arrlength = 7;
		for($x = 0; $x < $arrlength; $x++) {
		echo $nilai[$x];
		echo "<br>";
		}
 }
 
 
 echo trtinggi($nilai_awal);
  echo terendah($nilai_awal);
  echo '<br>';
   echo ratarata($nilai_awal);
?>
</body>
</html>