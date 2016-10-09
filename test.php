<? 
include "head.php";
?>

<div id="main">
	<?
	$limit = 12; 
	$max_num = 22; 
	$used_nums = array(); 
	while(1) { 
		$random = rand(1, $max_num); 
		if(!in_array($random, $used_nums)) { 
			$used_nums[] = $random; 
		} 
		if(count($used_nums) == $limit) { break; } 
	} 

	?>
	<section id="portfolio" class="two">
		<div class="container">
			<label>Ваше имя:</label><input type="text" id="name"></input><br> <br> 			
			<? 
			$i=0;
			while ($i < $limit) {
				$sql="SELECT * from test where id_test = $used_nums[$i]";
				
				$result = mysql_query($sql);


				while ($data = mysql_fetch_array($result)) {
					echo $data["question"];
					
					echo "<br>";

					$sql2="SELECT * from test_answers where id_question = $data[id_test]";
					$result2 = mysql_query($sql2);
					while ($data2 = mysql_fetch_array($result2)) {
						echo "<input type='radio' name='answer$data[id_test]' value='$data2[id_answer]'>$data2[answer]";
						echo "<br>";
					}
					?> 
					<br>
					<?

				}
				$i++;
			}
			
			?>
			<?
			echo "<div id='questions'>";
			$i=0;
			while ($i < $limit) {
				$sql="SELECT * from test where id_test = $used_nums[$i]";
				
				$result = mysql_query($sql);

				
				while ($data = mysql_fetch_array($result)) {
					
					echo "<div class='question' style='display:none'>$data[id_test]</div>";
					

					
					
					
					?> 
					
					<?

				}

				$i++;
			}
			echo "</div>";
			?>


			<button class="test_end">Закончить тестироваение</button>
		</div>
	</section>
	


</div>
