<?php 

$a = [
	['Ivanov1','Petrov1','Vasilievich1',],
	['Ivanov2','Petrov2','Vasilievich2',],
	['Ivanov3','Petrov3','Vasilievich3',]
];


/*function Names($a){

	for($i=0;$i<3;$i++)
	{

		echo $a[$i][0]." ".$a[$i][1][0]." ".$a[$i][2][0]."<br>";
	}
}
echo Names($a);*/

//Super_Max($a);

function Names($a){
	$s = "";
	for($i=0;$i<3;$i++){
		$s = $a[$i][0];
		for($j=1;$j<3;$j++){
			$s = $s." ".$a[$i][$j][0]." ";
		}
		echo $s."<br>";
		$s = "";
}}
Names($a);
 ?>