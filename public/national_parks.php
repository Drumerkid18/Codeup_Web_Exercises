<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'national_parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');
require_once('../db_connect.php');
// require_once('../park_seeder.php');

if(!isset($_GET['page'])){
	$page = 1;
	$offNum = 0;
}else{
	$page = $_GET['page'];
	$offNum = ($page - 1) * 4;
};

function sanitize($input){
	htmlentities(strip_tags($input));
	return $input;
}

$stmt = $dbc->query('SELECT * FROM national_parks');
$count = $stmt->rowCount();
$totalPages = ceil($count / 4);
$limNum = 4;


// Bring the $dbc variable into scope somehow
$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limNum OFFSET :offNum");

$stmt->bindValue(':limNum', $limNum, PDO::PARAM_INT);
$stmt->bindValue(':offNum', $offNum, PDO::PARAM_INT);
$stmt->execute();

$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);

if(!empty($_POST)){
	$newEntry = $_POST;
	
			$input = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';
			$stmt=$dbc->prepare($input);
			$stmt->bindValue(':name', sanitize($newEntry['name']), PDO::PARAM_STR);
    		$stmt->bindValue(':location', sanitize($newEntry['location']),  PDO::PARAM_STR);
    		$stmt->bindValue(':date_established', sanitize($newEntry['date_established']), PDO::PARAM_STR);
    		$stmt->bindValue(':area_in_acres', sanitize($newEntry['area_in_acres']),  PDO::PARAM_STR);
   		 	$stmt->bindValue(':description', sanitize($newEntry['description']),  PDO::PARAM_STR);
   		 	$stmt->execute();	
	
}




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
<div class="page-header center">
 	<h1>National Parks</h1>
</div>
<div class="container-fluid">
<div class= "row">
<div class="col-md-10 col-md-offset-1">
	<table class="table table-bordered">
		<!-- try and get this relative -->
		<th class="center">Name</th>
		<th class="center">Location</th>
		<th class="center">Date Established</th>
		<th class="center">Area In Acres</th>
		<th class="center">Description</th>


		<? foreach ($parks as $key => $park): ?>
		<tr>
				
			<td>
				<?= $park['name'] ?>
			</td>
				
			<td>
				<?= $park['location'] ?>
			</td>
				
			<td>
				<?= $park['date_established'] ?>
			</td>	
			
			<td>
				<?= $park['area_in_acres'] ?>
			</td>
			
			<td>
				<?= $park['description'] ?>
			</td>
									
		</tr>	
		<? endforeach; ?>
	</table>
</div>
</div>
</div>

<form class="center" method="POST" action ="/national_parks.php">
	<h3>Enter Items</h3>
	<p>
		<label for="name">New Name:</label>
		<input id="name" name="name" type= "text" placeholder = "Name">
	</p>
	<p>
		<label for="location">New Location:</label>
		<input id="location" name="location" type= "text" placeholder = "Location">
	</p>
	<p>
		<label for="date_established">New Date Established:</label>
		<input id="date_established" name="date_established" type= "text" placeholder = "Year-Month-Day">
	</p>
	<p>
		<label for="area_in_acres">New Area In Acres:</label>
		<input id="area_in_acres" name="area_in_acres" type= "text" placeholder = "Area without Commas">
	</p>
	<p>
		<label for="description">New Description:</label>
		<input id="description" name="description" type= "text" placeholder = "Description">
	</p>	
	<button type = "submit"> Add New National Park</button>
</form>

<nav class="center">
  <ul class="pagination">
    <li>
    <? if($page > 1): ?>
      <a href="?page=<?=$previous?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
  	<? endif; ?>
    </li>
   	<? if(($totalPages > 3) && ($page > 2)):?>
   	<li><a href="?page=<?=$previous-1?>"> <?=$previous-1?> </a> </li>
   	<? endif; ?>
    <? if($page > 1):?>
   	<li><a href="?page=<?=$previous?>"> <?=$previous?> </a> </li>
   	<? endif; ?>
    <li class= "active"><a href="?page=<?=$page?>"> <?=$page?> </a> </li>
    <? if($totalPages != $page): ?>
    <li><a href="?page=<?=$next?>"> <?=$next?> </a> </li>
	<? endif; ?>
    <li>
    <? if(($totalPages > 3) && ($totalPages >= $next+1)): ?>
    <li><a href="?page=<?=$next+1?>"> <?=$next+1?> </a> </li>
	<? endif; ?>
    <li>
    <? if($page <= ($totalPages - 1)): ?>	
      <a href="?page=<?=$next?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    <? endif; ?>
    </li>
  </ul>
</nav>

</body>
</html>