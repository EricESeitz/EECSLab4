<?php
echo "<h2>Exercise 1: Multiplication Table</h2>";
echo "<table border='1px solid black'><th></th>";
				for ($r = 1; $r <= 100; $r++)
				{
					echo "<td>$r</td>"; 						//create initial header row 1-100
				}

				for ($i = 1; $i <= 100; $i++)
				{
					echo "<tr><td>$i";							//create lefthand row 1-100
					for ($k = 1; $k <= 100; $k++)		//create cells of multiples within table, left  * header
					{
						$sum = $i * $k;
						echo "<td>$sum</td>";
					}
					echo "</td></tr>";							//end of left row, move on to next row in loop
				}
echo 		"</table>";		//end of table

?>
