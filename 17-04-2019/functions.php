<?php 

// $table = 9;

// for($a = 1 ; $a <= 10 ; $a++){
//     echo $table . ' x ' . $a . ' = ' . $table * $a . "<br>"; 
// }


// $table = 8;

// for($a = 1 ; $a <= 10 ; $a++){
//     echo $table . ' x ' . $a . ' = ' . $table * $a . "<br>"; 
// }

function getTableData($table, $start , $end){

    $data = "";

    for($a = $start ; $a <= $end ; $a++){
        $data .=  $table . ' x ' . $a . ' = ' . $table * $a . "<br>"; 
    }


    return $data;
}

echo getTableData(8 , 5 , 15);
echo getTableData(9 , 1 , 15);

?>