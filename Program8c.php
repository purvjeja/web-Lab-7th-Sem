<?php
header('Content-Type: text/plain'); //without this header "\t and \n" wont work
// transpose matrix
$matrix1 = array(
array(1, 2),
array(4, 5),
//array(7, 8)
);
$matrix2 = array(
array(1, 2),
array(4, 5),
//array(7, 8)
);

echo "\n\n\n";
echo "The order of the matrix A is:".count($matrix1)."x".count($matrix1[0]);
echo "\n";
echo "The order of the matrix B is:".count($matrix2)."x".count($matrix2[0]);
echo "\n";
$rowCount= count($matrix1); //Provides the rowcount of matrix
$colCount = count($matrix1[0]); //Provides the column count of matrix
echo "The input matrix A is:\n";

for($r = 0; $r < $rowCount; $r++){
    for($c=0; $c < $colCount; $c++){
      echo $matrix1[$r][$c]." \t";
    }
    echo "\n";
}

echo "The input matrix B is:\n";

for($r = 0; $r < $rowCount; $r++){
    for($c=0; $c < $colCount; $c++){
      echo $matrix2[$r][$c]." \t";
    }
  echo "\n";
}
//The Multiplication of the matrix
echo "\nThe Multiplication of matrix is:\n";
//A*B C*D
//B is not equal to C
if($colCount == $rowCount)
{
for($r = 0; $r < $rowCount; $r++)
{ for($c=0; $c < $colCount; $c++)
{
$val= $matrix1[$r][$c] * $matrix2[$r][$c];
echo $val."\t";
}
echo "\n";
}
}
else
{
echo "The matrix multiplication is not possible.";
}

?>
