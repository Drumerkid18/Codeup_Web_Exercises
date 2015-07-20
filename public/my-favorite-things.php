<?php

$favoriteThings = ["Beer", "Food", "Trucks", "Learning", "Adventure"];

?>
<html>
	<body>
			<table>
				<?php foreach ($favoriteThings as $thing) { ?>
				<th>
					<?php echo $thing ?>
				</th>
				<?php } ?>
			</table>
	</body>	
</html>