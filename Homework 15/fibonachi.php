<?php
$x = 1;
$y = 1;
if ($_GET['num'] ==0) {
    echo "No number";
}
elseif ($_GET['num'] ==1) {
    echo 1 . "." . " " . "number is" . " -" . $x;
}
elseif ($_GET['num'] ==2) {
    echo 1 . "." . " " . "number is" . " -" . $x . "<br>";
    echo 2 . "." . " " . "number is" . " -" . $y;
}

else {
    echo 1 . "." . " " . "number is" . " -" . $x . "<br>";
    echo 2 . "." . " " . "number is" . " -" . $y . "<br>";
    for($i=0; $i<=$_GET['num']-3; $i++) {

            echo $i + 3 . "." . " " . "number is" . " -" . $s = $x + $y;
            echo "<br>";
            $x = $y;
            $y = $s;
        }
    echo "Finished result" . " -" . $s;
    }
