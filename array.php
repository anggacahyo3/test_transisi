
<?php

$arr = [
['f', 'g', 'h', 'i'],
['j', 'k', 'p', 'q'],
['r', 's', 't', 'u']
];

function cari($ars=array(),$datas){
$data=$datas;
$arr1 = str_split($data);


$besar=count($arr1);
$abc=array();
$as=0;

		for ($i=0;$i<3;$i++){

			for ($t=0;$t<4;$t++){
	
					$abc[$as] = $ars[$i][$t];
					$as++;
				}


		}
		
$qw=count($arr1);

$kalimat="true";

for ($p=0;$p<$qw;$p++){
		
	if (in_array($arr1[$p], $abc)) {
    $kalimat="true";
	}else{
	$kalimat="false";
		break;
		
	}
	
	
}

return $kalimat;


}

echo cari($arr, 'fghi');
echo '<br>';
echo cari($arr, 'fghp'); 
echo '<br>';
echo cari($arr, 'fjrstp');

?>

