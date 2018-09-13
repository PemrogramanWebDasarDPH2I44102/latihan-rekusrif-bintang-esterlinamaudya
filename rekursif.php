<?php

$batas = 5;
function rekursif($i = 0){
  global $batas;
  echo "*";
  $i++;
  
  if($i<$batas){
    rekursif($i);
}else{
    echo "<br>";
    $batas--;
    if($batas!=0){
      rekursif();
    }
  }
}
rekursif();

echo "<br>";

$batass = 1;
function rekursiff($j=1){
  global $batass;
	echo "$j";
	$j++;

	if($j<=$batass){
	rekursiff($j);
	}else{
	echo "<br>";
	$batass++;
	if($batass<=5){
		rekursiff();
	}
}
}
rekursiff();
?>
