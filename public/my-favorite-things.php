<?php

$favoriteThings = ["Beer", "Food", "Trucks", "Learning", "Adventure"];

?>
<html>
	<body>
			<table>
				<?foreach ($favoriteThings as $thing): ?>
				<th>
					<?= $thing ?>
				</th>
				<? endforeach; ?>
			</table>
	</body>	
</html>