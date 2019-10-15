<?php

    echo '-----single line statement------'.'<br/>';

    $x= 10;
    $y= 20;
    $z= 30;
    $a= $x+$y;
    echo $a;
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

    echo '------conditional statement-----'.'<br/>'.'<br/>';

    $x= 10;
    $y= 20;
    $z= 30;
    echo 'If else condition..............'.'<br/>';
    if ($x>$y){
        echo 'This condition is true';
        echo '<br/>';
    }else{
        echo 'This condition is false';
    }
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
    echo 'switch case condition...........'.'<br/>';
    switch ($x){
        case 5:
            echo 'This case is false';
            break;
        case 10:
            echo 'This case is true';
            break;
        case 15:
            echo 'This case is false';
    }
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
    echo 'If else if condition........'.'<br/>';
    if ($x>$y){
        echo 'This condition is false';
    }
    else if($y>$z) {
        echo 'This condition is also false';
    }
    else if($z>$x) {
        echo 'This condition is true';
    }
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
    echo '-------repeated statement------'.'<br/>'.'<br/>';
    $x;
    for ($x=0; $x<=10; $x++){
        echo $x;
        echo '<br/>';
    }
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
    echo '------while condition------'.'<br/>'.'<br/>';
    $x= 10;
    while ($x<=15){
        echo 'this is while repeated statement';
        $x++;
        echo '<br/>';
    }

