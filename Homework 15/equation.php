<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lucvac havasarum@</title>
<?php
if($_GET['a'] !=0)
{
    $_GET['b'];
    $_GET['c'];
    $d = (pow($_GET['b'], 2) - 4 * $_GET['a'] * $_GET['c']);
    if ($d >= 0) {
        $x1 = (-$_GET['b'] - pow($d, 1 / 2)) / 2 * $_GET['a'];
        $x2 = (-$_GET['b'] + pow($d, 1 / 2)) / 2 * $_GET['a'];
        echo "<h1> Diskriminant@=" . $d . '</h1>' . "<br>";
        echo "<h3> Ete Diskriminant@ MEC E 0-IC apa </h3>" . "<br>";
        echo "<h1> x1 = " . $x1 . "</h1>" . "<br>";
        echo "<h1> x2 = " . $x2 . "</h1>";
    } else {
        echo "<h1> Diskriminant@=" . $d . '</h1>' . "<br>";
        echo "<h3> Ete Diskriminant@ POQQ E 0-IC apa </h3>" . "<br>";
        echo "<h1> Havasarum@ lucum chuni </h1>" . "<br>";
    }
}
else {
    $x = - $_GET['c'] / $_GET['b'];
    echo "<h3> Ete a-i arjeqy havasar e 0-i, apa havasarum@ uni mek lucum </h3>" . "<br>";
    echo "<h1> x =" . $x ."</h1>";
}
?>
    </head>
<body>
</body>
</html>
