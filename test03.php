<h2>超神準大樂透預測王</h2>
<hr>
<?php
$count = 0; //目前取得的數字個數
while ($count < 6) {
	$t = rand(1, 49); //先取得一個候選的隨機數
	if (in_array($t, $lotto)) continue; //跟先前的數字做比較檢查是否重複，是的話再取一個
	$lotto[] = $t; //不的話給定數字
	$count++; //取得一個給定數後，加一直到得到六個數
}
sort($lotto);
foreach ($lotto as $num)
	echo $num . ",";
$st = rand(1, 49); //先產出一個數
while (in_array($st, $lotto)) //檢查是否重複
	$st = rand(1, 49); //是的話再產出一個數
echo "<br>特別號：" . $st; //不的話回傳

?>
<hr>

<hr>
不準免錢，有中歡迎斗內...