<? 
include "head.php";
$letter = $_GET[letter];
?>

<div id="main">

	<section id="portfolio" class="two">
		<div class="container">

			<? 


			$sql="SELECT DISTINCT `letter` from wordbook";


			$result = mysql_query($sql);


			while ($data = mysql_fetch_array($result)){
				echo "<a href='wordbook.php?letter=$data[letter]'><div class='letters'>";
				echo $data[letter];
				echo "</div></a>";

			}





			?> 
			<br>
			<?



			$sql="SELECT * from wordbook WHERE letter = '$letter'";					
			$result = mysql_query($sql);
			

			?>



		</div>
	</section>
	<section id="about" class="three">
		<div class="container">
			<?
			if(isset($letter)){
				while ($data = mysql_fetch_array($result)){

					echo $data[word]." - $data[value]<hr>";


				}
			}else{
				$sql="SELECT * from wordbook";					
				$result = mysql_query($sql);
				while ($data = mysql_fetch_array($result)){

					echo $data[word]." - $data[value]<hr>";


				}

			}

			?>

		</div>
	</section>


</div>
