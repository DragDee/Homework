<?php 

$a = [5,6,7,8,9,10];

function Super_Max($a){
	$max = $a[0];

	for($i=0;$i<count($a);$i++){
		if( $a[$i]>$max) $max = $a[$i];
	}
	echo $max;
}

Super_Max($a);
 ?>