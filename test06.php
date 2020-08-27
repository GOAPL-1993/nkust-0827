<?php
	for($i=0; $i<10; $i++){
		if ($i%2 == 1) continue; //== 1可以省略
		echo $i . "<br>";
		// 可以用break來取代cintinue
	}
?>