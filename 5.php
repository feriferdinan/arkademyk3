<?php
			function sort_array($array){
			sort($array);
			$arr = [];
			foreach($array as $a){
					sort($a);
					$arr[] = $a;
			}
			return $arr;
			}
			$array = [
					["g","h","i","j"],
					["a","c","b","e","d"],
					["g","e","f"]
					];
			print_r(sort_array($array));