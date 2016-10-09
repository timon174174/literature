<?

include "connect.php";

$v = $_POST[v];
$o = $_POST[o];
$name = $_POST[name];
$date = date("d-m-Y H:i:s");


$ball = 0;

$i=0;
while($i<12){

	$sql="SELECT id_correct_answer from test where id_test = $v[$i]";
	
	$result = mysql_fetch_array(mysql_query($sql));



	if ($o[$i] == $result[id_correct_answer]){

		$ball++;

	}

	









	$i++;

}
$sql = "INSERT INTO `test_result`(`name`, `test_date`, `ball`) VALUES ('$name','$date',$ball)";

mysql_query($sql);

echo "$ball";




?>