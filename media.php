<?
include "head.php";
?>
						<?
						$id=$_GET['id'];
						$sql="SELECT * from media where id_media = $id";
						?>
						<div id="main">
						<section id="portfolio" class="two">
						<div class="container">
						<? 
						$result = mysql_query($sql);
							while ($data = mysql_fetch_array($result)) {
								?>
								<div class="name_author"><h2>
								<?
								echo $data["name"];
								 
								?>
								</h2>
								</div>
								<div class="biography">
								<?

								echo $data ["text"];
								?>
								</div>
								<?
								if(!empty($data['film'])){
								?>
								<video width="500" height="360" controls src="<? echo $data[film]; ?>" preload="none" poster="http://www.cyberforum.ru/images/flash.png"></video>
								<?
								}
								?>
								<?
							}

						?>
							

						</div>
					</section>
					</div>