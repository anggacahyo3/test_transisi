 <html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
function CountCaps($string) {
 return strlen(preg_replace('/[^A-Z]+/', '', $string));
}
function CountSmall($string) {
 return strlen(preg_replace('/[^a-z]+/', '', $string));
}
$str = $_POST["name"];
$result1 = CountCaps($str);
$result2 = CountSmall($str);
echo 'Kata Yang Diberikan = ' .$str;
echo '<br><br>';
echo 'Jumlah Huruf Besar = ' .$result1.'.';
echo '<br><br>';
echo 'Jumlah Huruf Kecil = ' .$result2.'.';
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


