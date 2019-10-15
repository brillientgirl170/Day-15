<?php

    $x= 10;
    $y= 20;
    $z= 30;
    $plus= $x+$y;
    echo $plus;
    echo '<br/>';

    echo 'arithmetic binary operator .....';     echo '<br/>';

    echo $x+$y; // 30
    echo '<br/>';
    echo $x-$y; // -10
    echo '<br/>';
    echo $x*$y; // 200
    echo '<br/>';
    echo $x/$y; // .5
    echo '<br/>';
    echo $x%$y; // 10
    echo '<br/>';

    echo 'arithmetic unary operator .....';     echo '<br/>';


    echo $x++; // 10
    echo '<br/>';
    echo $x--; // 11
    echo '<br/>';
    echo ++$x; // 11
    echo '<br/>';
    echo $y++; // 20
    echo '<br/>';
    echo $y--; // 21
    echo '<br/>';
    echo ++$y; // 21
    echo '<br/>';
    echo $y; // 21
    echo '<br/>';

    echo 'assignment operator .....';     echo '<br/>';

    echo $x+=$y; // 30
    echo '<br/>';
    echo $x-=$y; // 10
    echo '<br/>';
    echo $x*=$y; // 200
    echo '<br/>';
    echo $y/=$z; // 0.6
    echo '<br/>';
    echo $y%=$z; // 0
    echo '<br/>';
    echo $y.=$z; // 030
    echo '<br/>';

    echo 'conditional operator .....';     echo '<br/>';
    $x= 10;
    $y= 20;
    $z= 30;

    echo $x>$y; // false
    echo '<br/>';
    echo $x>=$y; // false
    echo '<br/>';
    echo $x<$y; // true
    echo '<br/>';
    echo $y<=$z; // true
    echo '<br/>';
    echo $y==$z; // false
    echo '<br/>';
    echo $y!=$z; // true
    echo '<br/>';
    echo $x===$y; // false
    echo '<br/>';
    echo $y!==$z; // true
    echo '<br/>';

    echo 'logical operator .....';     echo '<br/>';
    $x= 10;
    $y= 20;
    $z= 30;
    $a= true;

    echo ($x<$y)&&($y<$z); // true
    echo '<br/>';
    echo ($x<$y)||($y>$z); // true
    echo '<br/>';
    echo (!$a); // false
    echo '<br/>';




