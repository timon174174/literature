<?

include 'head.php';


$id = $_GET[id];


$sql = "select creative_task from author where id_author = $id";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>
<body style="height: 100%">
<div id="main" style="height: 100%">

<section id="portfolio" class="two" style="height: 100%">
		<div class="container">
		<div style="width: 100%; text-align: center; font-size: 25px; font-weight: bold;"><h1>Творческое задание</h1></div>
		
		<?
echo "$data[creative_task]";
?>
</div>
</section>
</div>
</body>

