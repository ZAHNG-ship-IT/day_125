<?php
    echo $str1 = "1";
    echo $str2 = "ab";
    echo $num1 = $str1 + $str2;
    echo $num2 = $str1 + 5;
    echo $num3 = $str1 + 2.56;
    echo $num4 = "6kb" + 5;
?>



 <?php
    echo $var = (int)"hello";
    echo $var = (int)TRUE;
    echo $var = (int)12.56;
    echo $var = (string)10.5;
    echo $var = (bool)1;
    echo $var = (boolean)0;
    echo $var = (boolean)"0";
    $string = "binary string";
    echo $var = (binary)$string;
    echo $var = b"binary string";

?> 

<?php
    $avr1 = var_dump(123);
    $avr2 = var_dump((int)FALSE);
    $avr3 = var_dump((bool)NULL);

    echo $avr1;
    echo $avr2; 
    echo $avr3;
?>