<?php
echo (hasCollision([-1,-1,1],[[3,5,2],[10,1,12],[1,2,3],[7,1,2],[-1,-5, 5],[7,8,11],[1,10,13]]));
function hasCollision(array $circle, array $circlesLists) {
    foreach ($circlesLists as $key => $value) {
    	$d = sqrt(pow(($circle[0] - $value[0]),2) + pow(($circle[1] - $value[1]),2));
     	if($d < ($circle[2] + $value[2])){
     		return 'Пересекается';
     	}
    }
    return 'Не пересекается';     
}
///////
$result = sortMat([
	[6, 5, 13],
	[1, 4, 2],
	[3, 9, 8],
	[5, 10, 7],
]);

foreach ($result as $key => $value) {
	foreach ($value as $key => $value1) {
		echo $value1.' , ';
	}
	echo "<br>";
}
function sortMat(array $mat){
	    $arr = [];
	    $count = count($mat[0]);
		foreach ($mat as $key => $value) {			
			foreach ($value as $key => $value1) {
				$arr[] = $value1;
			}
		}
		sort($arr);
		$arr = array_chunk($arr,$count);
		foreach ($arr as $key => $value) {
			$arr[$key] = array_reverse($arr[$key]);
		}
		return $arr;
}

/////////
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = 'utf-8'>
	<script defer type="text/javascript" src = "1.js?v=7"></script>
	<link rel="stylesheet" type="text/css" href="1.css?v=10">
</head>
<body>
    <canvas id = 'deshif' width="1000" height="1000">Элеманта нет</canvas>
<body>
	
	<div class = 's'>
		<p></p>
	</div>
	<div class = 'f'>
		<div class = 'z'>
			<p></p>
		</div>
	</div>	
	<div class = 'p'>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
	</div>
    <div class="button">
		<input id="check1" type="checkbox">	
		<input id="check2" type="checkbox">
		<label for="check1"></label>
		<label for="check2"></label>
	</div>
</html>

