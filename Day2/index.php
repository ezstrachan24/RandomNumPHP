<!DOCTYPE html>

<html lang="en">

<head>
	
<title>Random Numbers</title>

	<meta charset="UTF-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<h1 style="text-align: center">Random Numbers</h1>
	<h2 style="text-align: center">Distribution</h2>
	<hr />

	<?php
		$myArray = array();

		// Initialize Array
		for ($i=0; $i < 100; $i++) { 
			$myArray[$i] = 0;
		}

		// Generate Samples
		for ($i=0; $i < 10000; $i++) { 
			$index = rand(1,100);
			$index -= 1;
			$myArray[$index] += 1;
		}

		// Display Test Data
		echo ("<table>");
			echo ("<tr>");
				echo ("<th>Value</th>");
				echo ("<th>Distribution</th>");
			echo ("</tr>");
			for ($i=0; $i < 100; $i++) { 
				echo  ("<tr>");
					echo ("<td>".($i+1)."</td>");
					echo ("<td>".$myArray[$i]."</td>");
				echo  ("</tr>");
			}
		echo ("</table>");
	?>
	<footer>
			<h6>Copyright &copy; <?php echo(date('Y')); ?></h6>
			<h6>Company Name</h6>
	</footer>
</body>

</html>