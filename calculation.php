<?php
do {
        $number1 = rand(1, 20);
        $number2 = rand(1, 20);
        $number3 = rand(25, 50);
        $number4 = rand(1, 24);

        $result = (($number1 * $number2) / ($number3 - $number4));
        $newResult = $result;
} while ($newResult != floor($result)); {

        $multiplication = ($number1 * $number2) . "<br>";
        $sub = ($number3 - $number4) . "<br>";

        echo " Please Calculate: <strong>[($number1 * $number2) / ($number3 - $number4)] </strong> <br>";
        echo "<strong> Multiplication: </strong>  " . $multiplication;
        echo "<strong> Subtraction: </strong>" . $sub;
        echo "<strong>Answer :</strong> " . $newResult;
}
