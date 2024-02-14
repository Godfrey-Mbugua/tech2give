<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isPowerOfTwo</title>
</head>

<body>

    <!-- Question 3: Power of Two
Write a program that takes an integer as input and returns true if the input is a power of two.
Examples: 
8=> returns true
6=> returns false -->
    <form method="post">
        <label for="isPowerOfTwo">Enter a number</label>
        <input type="number" name="n" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    function isPowerOfTwo($n)
    {
        if ($n <= 0) {
            return false;
        }
        return ($n & ($n - 1)) == 0;
    }

    if (isset($_POST['submit'])) {
        $number = $_POST['n'];
        $result = isPowerOfTwo($number) ? "true" : "false";
        echo "The number $number returns: $result";
    }
    ?>
</body>

</html>