<?php
$arr=[1, 9, 16, 4, 22, 31, 6, 19, 48, 3, 90, 61, 88 ,55, 27];
$evenarr[]=0;
$n=count($arr);
$j=0;
$k=0;
for($i=0;$i<$n;$i++)
{
	if(($arr[$i] % 2 )==0)
	{
 $evenarr[$j]=$arr[$i]."<br>";
	$j++;
	}
	else
	{
	$oddarr[$k]=$arr[$i]."<br>";
	$k++;
	}

}

echo"<br>list of Numbers in Array<br>";
foreach ($arr as $value) {
		echo $value.'<br>';
		# code...
								}
echo 'Even Numbers array<br>';
	foreach ($evenarr as $evalue) {
		echo 'Even no of array is'.$evalue;
	
									}

echo '<br>Odd Numbers Array<br>';									
	foreach ($oddarr as $ovalue) {
		echo 'Odd no of array is'.$ovalue;
		
								}

	echo"<br>Sorted Even Numbers of Array<br>";
asort($evenarr);
foreach ($evenarr as $eval) {
    echo  $eval . "\n";
	}

echo"<br>Sorted Odd Numbers of Array";
asort($oddarr);
foreach ($oddarr as$oval) {
    echo  $oval . "\n";

						}


					

?>