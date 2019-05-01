<?php
/*function recurSum($n)
{
    if ($n <= 1)
        return $n;
    return $n + recurSum($n - 1);
}
$n = 5;
echo recurSum(($n));*/

function recurSum($n)
{
    if ($n<=1)
        return $n;
    return $n+ recurSum($n-1);
}

$n=10;
echo recurSum(($n));

?>

