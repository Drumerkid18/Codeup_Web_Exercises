<?php

$listAajectives = ["active", "aggressive", "agile", "agitated", "amazing", "ambitious", "ample", "amused", "awful", "awkward"];
$listNouns		= ["run", "jump", "skip", "hop", "swim", "fall", "drink", "pour", "chug", "spill"];

$selectedNum1 	= mt_rand(0, count($listAajectives) -1);
$selectedNum2 	= mt_rand(0, count($listNouns) -1);

$serverName 	= $listAajectives[$selectedNum1] . " " . $listNouns[$selectedNum2];

?>

<html>
<style>
	h1{
		text-align: center;
	}
</style>
	<body>
		<h1><?= $serverName ?></h1>
	</body>
</html>