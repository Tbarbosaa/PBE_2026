<?php

$a = 2;
$b = 6;
$c = 4;


$delta = ($b*$b)- (4*$a*$c);

if ($delta < 0){
    echo "Não existem raízes reais";
}

else if ($delta == 0){
    $x= (-$b) / (2 * $a);
    echo "A uníca raiz é". $x;
}
else {
$x1 = (-$b + sqrt($delta)) / (2* $a);
echo "o valor de x1 é  ". $x1;

echo "</br>";

$x2 = (-$b - sqrt($delta)) / (2* $a);
echo "o valor de x2 é  ". $x2;

}

?>