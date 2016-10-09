<?
include "head.php";
?>
<div id="main">
	<?
	$id=$_GET["id"];
	$sql="SELECT * from author where id_author = $id";
	
	?>
	<!-- Portfolio -->
	<section id="portfolio" class="two">
		<div class="container">
			<? 
			$result = mysql_query($sql);
			while ($data = mysql_fetch_array($result)) {
				?>
				<div class="img_author" style="background-image: url(<?echo $data["photo"];?>)"></div>
				<div class="name_author"><h2>
					<?
					echo $data["name"]." ".$data["patronymic"]." ".$data["surname"];
					echo $data["years_of_life"]; 
					?>
				</h2>
			</div>
			<div class="biography">
				<?

				echo $data ["biography"];
				?>
			</div>
			<?
		}

		?>
		

	</div>
</section>
</div>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollzer.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>


</body>
</html>