<?php
declare(strict_types=1);
require 'operator.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>
        <form action="calculate.php" method="POST">
            <p> Calculator </p>
            <input type="number" name="num1" placeholder="First Number">
            <select name="operator">
                <option value="add">Addition</option>
                <option value="sub">Addition</option>
                <option value="mul">Addition</option>
                <option value="div">Addition</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>
        </form>
    </body>
</html>