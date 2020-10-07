<?php
	echo "<table width = 300>";
	echo "<tr bgcolor = #cccccc><td>i</td><td>i**2</td><td>i**3</td></tr>";

	
	for($i=1; $i<=9; $i++) {
		if ($i%2)

		echo "<tr bgcolor = #ccffff>";		
		else
		//else後如果只有一條指令的話可以不用加{}
		echo "<tr bgcolor = #ccffcc>";
		
		echo "<td>$i</td><td>" . $i**2 . "</td><td>" . $i**3 . "</td>";
		echo "</tr>";
	}
	echo "</table>";
