<?php
$array=['P','R','O','G','R','A','M','M','E','R'];
function cetak_gambar($array){	
	for ($i=0; $i < 10; $i++){
		for ($j=0; $j < 10; $j++){
			$kanan = 9;
			if($i == $j){
				echo $array[$i]." ";
			}elseif ($kanan-$j == $i){
				echo $array[$i]." ";
			}else {
				echo "= ";
			}
		}
		echo "\n";
		}
}
cetak_gambar($array);

?>