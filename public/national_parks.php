<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');
require_once('../db_connect.php');
// require_once('../park_seeder.php');

if(!isset($_GET['page'])){
	$page = 1;
	$offset = 0;
}else{
	$page = $_GET['page'];
	$offset = ($page - 1) * 4;
};
$stmt = $dbc->query('SELECT * FROM national_parks');
$count = $stmt->rowCount();

$totalPages = ceil($count / 4);

function getParks($dbc, $offset) {
    // Bring the $dbc variable into scope somehow
   return $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset)->fetchALL(PDO::FETCH_ASSOC);

}

$parks = getParks($dbc, $offset);

$next = $page + 1;
$previous = $page - 1;



?>

<html>
<head>
	<title>National Parks</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="javascript" type="text/css" href="/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/parks_stylesheet.css">
    <link href="/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-bordered table-condensed">
	<!-- try and get this relative -->
	<th>Name</th>
	<th>Location</th>
	<th>Date Established</th>
	<th>Area In Acres</th>


	<? foreach ($parks as $key => $park): ?>
	<tr>
			<td>
				<?= $park['location'] ?>
			</td>
			<td>
				<?= $park['name'] ?>
			</td>
			<td>
				<?= $park['date_established'] ?>
			</td>
			<td>
				<?= $park['area_in_acres'] ?>
			</td>	
	</tr>	
	<? endforeach; ?>
</table>

<nav class="center">
  <ul class="pagination">
    <li>
    <? if($page > 1): ?>
      <a href="?page=<?=$previous?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
  	<? endif; ?>
    </li>
    <? if($page > 1):?>
   	<li><a href="?page=<?=$previous?>"> <?=$previous?> </a> </li>
   	<? endif; ?>
    <li class= "active"><a href="?page=<?=$page?>"> <?=$page?> </a> </li>
    <? if($totalPages != $page): ?>
    <li><a href="?page=<?=$next?>"> <?=$next?> </a> </li>
	<? endif; ?>
    <li>
    <? if($page <= 1): ?>	
      <a href="?page=<?=$next?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    <? endif; ?>
    </li>
  </ul>
</nav>

</body>
</html>