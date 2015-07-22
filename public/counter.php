<?php

// Require or include statements are allowed here. All other code goes in the pageController function.

/**
 * The pageController function handles all processing for this page.
 * @return array An associative array of data to be used in rendering the html view.
 */
function pageController()
{
    // Initialize an empty data array.
    $data = array();


   	if (isset($_GET['name'])) {
   		$counter = $_GET['counter'];
   		if (!empty($_GET)) {
	   		if ($_GET['name'] == 'up') {
	   			$counter++;
	   		}elseif ($_GET['name'] == 'down') {
	   			$counter--;
	   		}
   		}
   	}else {
   		$counter = 0;
   	}

   	$data['counter'] = $counter;
    // Return the completed data array.
    return $data;    
}
extract(pageController());
?>
<html>
	
<body>
	<a href="?name=up&counter=<?=$counter;?>">up</a>
	<a href="?name=down&counter=<?=$counter;?>">down</a>
	<?= $counter ?>

</body>

</html>