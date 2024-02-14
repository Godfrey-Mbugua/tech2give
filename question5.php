<!-- //Question 5: Reverse Integer
Write a program that takes an integer as input and returns an integer with reversed digit
ordering.
Examples:
For input 500, the program should return 5.
For input -56, the program should return -65.
For input -90, the program should return -9.
For input 91, the program should return 19. -->

<?php
function reverseInteger($n)
{
    $reversed = 0;
    while ($n != 0) {
        $reversed = $reversed * 10 + $n % 10;
        $n = (int)($n / 10);
    }
    return $reversed;
}

// Test the function
echo reverseInteger(34);

?>