<?php

    function change(){
        echo "<h1 style='color:red'>Hello</h1>";
    }
    change();
    $marks = array(79,86,97);

function totalSum($marks){
    echo "Inside function <br>";
    $sum = 0;
    global $sum2;
    for($i=0;$i<count($marks);$i++){
        $sum += $marks[$i];
    }
    $sum2 = $sum;
    return $sum;
}
echo "Total marks: ".totalSum($marks)." out of 300<br><br>";
// echo  $sum; //will give error
// echo "The global function returns: $sum2";
?>
