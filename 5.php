<?php

$array = [["e","g"],["x","e","w"]];
	function sort_array($array){
	sort($array);
	$arr = [];
	foreach($array as $ar){
		sort($ar);
		$arr[] = $ar;
	}
	return $arr;
}
print_r(sort_array($array));

?>
