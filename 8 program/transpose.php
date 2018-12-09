<?php
header('Content-Type: text/plain');

$matrix1 = array(
array(1,2),
array(3,4),
);

$matrix2 = array(
array(1,2),
array(3,4),
);

echo "\n\n\n\n";

echo "The order of matrix A is " .count($matrix1). "x" .count($matrix1[0]);

echo "The order of matrix B is " .count($matrix2). "x" .count($matrix2[0]);

echo "\n";

$row = count($matrix1);
$col = count($matrix1[0]);

echo "The input Matrix A is\n";

for($r=0; $r<$row; $r++){
	for($c=0; $c<$col; $c++){
		echo $matrix1[$r][$c]." \t";
	}
	echo "\n";	
}

echo "The input Matrix B is\n";

for($r=0; $r<$row; $r++){
	for($c=0; $c<$col; $c++){
		echo $matrix2[$r][$c]." \t";
	}
	echo "\n";	
}

echo "The Transpose of matrix A is\n";

for($r=0; $r<$row; $r++){
	for($c=0; $c<$col; $c++){
		echo $matrix1[$c][$r]." \t";
	}
	echo "\n";	
}

echo "The Addition of two matrix is\n";

for($r=0; $r<$row; $r++){
	for($c=0; $c<$col; $c++){
	
		echo $matrix1[$r][$c]+$matrix2[$r][$c]." \t";
	}
	echo "\n";	
}

$colCount = count($matrix1[0]);
$rowCount2 = count($matrix2);

echo "The Multiplication of two matrix is\n";

if($colCount == $rowCount2){

for($r=0; $r<$row; $r++){
	for($c=0; $c<$col; $c++){
		echo $matrix1[$r][$c]*$matrix2[$r][$c]." \t";
	}
	echo "\n";	
}
}
else
{
	echo "Matrix multiplication not possible";
}
?>
