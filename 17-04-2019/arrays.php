<?php 

// index / keys

// values



$names = array();
$names = [ 
    8,
    999, 
    'v' => 'asda'
];


$class = array(
    '8th' => array(
        'students' => array(
            'RollNo1' => array(
                'name' => 'saqib',
            )
        )
    )
);

$portfolio = array(
    'pakistan' => array(
        'lahore' => array(

        )
    )
        );


$a = 3;


// echo $a;

// echo($names[0]);

// print_r($names);
// var_dump($names);


// for($a=0; $a<=2; $a++){
//     echo $names[$a] . "<br>";
// }


//count

foreach($names as $key => $value){
    echo $names[$key];
    die;
//  echo ($abc . "=======" .$name . "<br>");
}


?>