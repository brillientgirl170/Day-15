<?php
//    $data = [];
//
//    $data[1]= 10;
//    $data[2]= 20;
//    $data[3]= 30;
//    $data[4]= 40;
//
//
//    $data['name']= 'Sumi';
//    $data['address']= 'Badda';
//    $data['country']= 'Bangladesh';
//
//    echo $data[1];
//    echo '<br/>';
//    echo $data['name'];


//    $data= [10, 20, 30, 'Sumi', 'Badda', 'Bangladesh'];
//
//    echo $data[4];

    $data= [
        'name'      => 'Sumi',
        'address'   => 'Badda',
        'country'   => 'Bangladesh',
        'Mobile'    => '01770223960',
        'gender'    => 'female'
    ];

//        foreach($data as $value){
//            echo $value.'<br/>';
//        }


//        echo '<pre>';
//        print_r($data);

//        var_dump($data);

        $data= [];

        $data[0][0]= 10;
        $data[0][1]= 20;
        $data[0][2]= 30;

        $data[1][0]= 40;
        $data[1][1]= 50;
        $data[1][2]= 60;

        $data[2][0]= 70;
        $data[2][1]= 80;
        $data[2][2]= 90;

        $data[3][0]= 100;
        $data[3][1]= 110;
        $data[3][2]= 120;

        //foreach ($data as $value){
        //    echo $value[0].'<br/>';
        //}

        //        foreach ($data as $value){
        //            echo $value[0].' '.$value[1].' '.$value[2].'<br/>';
        //        }

        foreach ($data as $value){
            foreach ($value as $v_value){
                echo $v_value.' ';
            }
            echo '<br/>';
        }

        echo '<br/>';

        function demo(){
            echo 'This is function';
        }
        demo();

        echo '<br/>';

        function demoOne($firstName=null, $lastName=null){
//            $firstName= 'Sumi';
//            $lastName= 'Akter';
            $fullName= $firstName.' '.$lastName;
//            echo $fullName;
            return $fullName;
        }
        echo '<br/>.............................<br/>';
        echo demoOne('sumi');

        echo '<br/>.............................<br/>';
        $res= demoOne('Rumi', 'Akter');
        echo 'Full name is: '.$res;

        echo '<br/>.............................<br/>';
        $res= demoOne('Sumon', 'Akon');
        echo '<h1>'.$res.'</h1>';



















