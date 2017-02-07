<?php
    //Ct = (Fc - 32) * 5 / 9
    //Ft = Ct * 9 / 5 - 32
    echo '<pre>';
    $fTemperature = -50.00;
    while($fTemperature <= 50.00){
        print( $fTemperature . 'F = ' . ($fTemperature - 32) * 5 / 9 . 'C <br>');
        $fTemperature += 5.00;
    }

    echo '</pre>';

    /*
1) Without using a PHP program to evaluate them, determine whether each of these expressions is true or false :
    100.00 - 100 = false
    "zero" = true
    "false" = true
    0 + "true" = true
    0.000 = false
    "0.0" = true
    strcmp("false","False") = true
    0 <=> "0" = false

2)Without running it through the PHP engine, figure out what this program prints:
    $age = 12;
    $shoe_size = 13;

    if ($age > $shoe_size) {
        print "Message 1.";
    } elseif (($shoe_size++) && ($age > 20)) {
        print "Message 2.";
    } else {
        print "Message 3.";
    }
    print "Age: $age. Shoe Size: $shoe_size";

    PROGRMAP PRINT:
        Message 3.
        Age: 12. Shoe Size: 13
    */