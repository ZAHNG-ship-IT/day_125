<?php

    $my_global = 1;

    function my_func1() {
        global $my_global;
        global $two_global;
        echo 'my_global = '.$my_global."<br/>";
        echo $two_global = 2;
    }
    function my_func2() {
        global $two_global;
        echo '$two_global = '.$two_global."<br/>";
        $two_global = 3;
    }

    my_func1();
    my_func2(); 
    echo $two_global;



?>

//检查变量是否存在
<?php
    if (isset($my_global)) {
        echo '$my_global is set'."<br/>";
    } else {
        echo '$my_global is not set'."<br/>";
    }

    if (isset($two_global)) {
        echo '$two_global is set'."<br/>";
    } else {
        echo '$two_global is not set'."<br/>";
    }



<?php
    $name = "Tom";
    $$name = 20;
    echo $name."<br/>";
    echo $$name."<br/>";
    echo $Tom."<br/>";
    echo "${$name}"."<br/>";
    echo "${$name} years old"."<br/>";
?>



