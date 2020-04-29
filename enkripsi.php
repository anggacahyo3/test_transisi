 <html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


$data=$_POST['name'];
echo $data;
$arr1 = str_split($data);
$besar=count($arr1);
echo '<br>';
for ($i=0;$i<$besar;$i++){
	
	if($i==0){
		$a=ord($arr1[$i]);
	echo chr($a+1);
	}else if($i % 2 == 0) {
		$a=ord($arr1[$i]);
		echo chr($a+($i+1));
	}else{
		$a=ord($arr1[$i]);
		echo chr($a-($i+1));
	}
	
	
}

echo "<br>";
echo "EDKGSK";

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


