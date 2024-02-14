<!-- Question 2: Fibonacci Sequence
Write a program to generate the Fibonacci sequence up to 100. -->



<?php

$f1 = 0;
$f2 = 1;


echo $f1 . " " . $f2 . " ";


while ($f1 + $f2 <= 100) {
    $next = $f1 + $f2;
    echo $next . "<br/> ";
    $f1 = $f2;
    $f2 = $next;
}
?>