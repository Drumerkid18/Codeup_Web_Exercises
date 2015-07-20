<?php

$listAajectives = ["active", "aggressive", "agile", "agitated", "amazing", "ambitious", "ample", "amused", "awful", "awkward"];
$listNouns		= ["run", "jump", "skip", "hop", "swim", "fall", "drink", "pour", "chug", "spill"];

$selectedNum 	= mt_rand(0,9);

$serverName 	= $listAajectives[$selectedNum] . $listNouns[$selectedNum];

?>

<html>
<style>
	h1{
		text-align: center;
	}
</style>
	<body>
		<h1><?php echo $serverName ?></h1>
	</body>
</html>