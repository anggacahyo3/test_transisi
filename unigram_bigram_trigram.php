 <html>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

function pre_print_r($var){
  echo "<pre>";
	print_r($var);
	echo "</pre>";
}


function Bigrams($word){
    $ngrams = array();
	$ngrams2 = array();
	$nilai = explode(" ", $word);
	$len = count($nilai);
	echo "Bigram";
	$kalimat="";
	
    for($i=0;$i+1<$len;$i++){
        $ngrams[$i]=$nilai[$i].' '.$nilai[$i+1].',';
    }
	
    $ngrams2=$ngrams;
	$len2 = count($ngrams2);
	
	for($t=0;$t<$len2;$t=$t=$t+2){
		$kalimat.=$ngrams2[$t];       
    }
	$newstring = substr_replace($kalimat,"", -1);
	return $newstring;
}
pre_print_r(Bigrams($_POST["name"]));



function Trigrams($word){
    $ngrams = array();
	$ngrams2 = array();
    $nilai = explode(" ", $word);
	$len = count($nilai);
	echo "Trigram";
	$kalimat="";
    for($i=0;$i+2<$len;$i++){
        $ngrams[$i]=$nilai[$i].' '.$nilai[$i+1].' '.$nilai[$i+2].',';
    }
	
    $ngrams2=$ngrams;
	$len2 = count($ngrams2);
	
	for($t=0;$t<$len2;$t=$t=$t+3){
		$kalimat.=$ngrams2[$t];       
    }
	$newstring = substr_replace($kalimat,"", -1);
	return $newstring;
}
pre_print_r(Trigrams($_POST["name"]));



function Ngrams($word,$n=3){
    $ngrams = array();
    $nilai = explode(" ", $word);
	$len = count($nilai);
	echo "Unigram";
	$kalimat="";
    for($i=0;$i+$n<=$len;$i++){
        $string="";
        for($j=0;$j<$n;$j++){ 
            $string.=$nilai[$j+$i].','; 
			
        }
        $kalimat .= $string;
    }
		$newstring = substr_replace($kalimat,"", -1);
        return $newstring;
}

pre_print_r(Ngrams($_POST["name"],1));

}
?>
<br>
<br>
<br>
<form action="" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>


</body>
</html> 
