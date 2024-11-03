<?php

$a = 1;
//echo $a;
$a = 'Hi';
//echo "<br/>".$a;

define('ABCD', 'HI');
//echo ABCD;

// Case-insensitive constant
//define("ABC", "constant value", true);
//echo 'abc';

// Simple scalar value
const CONSTANT = 'Hello World';
//CONSTANT = 'Hello World World';
//echo CONSTANT;

$expression;


?>

<?php
$expression = false;
?>




<?php if ($expression == true): ?>

    <h1>This will show if the expression is true.</h1>

<?php else: ?>

  <h1>Otherwise this will show.</h1>

<?php endif; ?>


<?php

if ($expression == true){
    echo "<h1>This will show if the expression is true.</h1>";
} else {
    echo "<h1>Otherwise this will show.</h1>";
}

?>

<!--
<?php for ($i = 0; $i < 5; ++$i): ?>

Hello, there!

<?php endfor; ?>
-->

<?php

echo 2*2;
echo '<br />';

for ($i = 1; $i < 4; ++$i){
    // i 1 2 3
    for ($j = 0; $j < 3; ++$j){
        // 0 1 2 
        //echo '2 x '. $i.' x '. $j.' = '. (2*$i*$j).'<br>';
        if ($i%2 == 0){
            echo 'i is: '.$i.' j is: '.$j.'<br />';
        }
        // ** % * - + /
    }
    //0 1 2 3 4 
    //echo 'Hello, there <br>';
    //echo '2 x '. $i.' = '. (2*$i).'<br>';
}



/*
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
2 x 5 = 10
2 x 6 = 12
2 x 7 = 14
2 x 8 = 16
2 x 9 = 18
2 x 10 = 20
*/

/*
echo 'Hello, there <br>';
echo 'Hello, there <br>';
echo 'Hello, there <br>';
echo 'Hello, there <br>';
echo 'Hello, there <br>';
*/


?>




<?php

$array = array('Apple', 'Banana', 'Cherry');
echo $array[0];

?>

<?php //foreach ($array as $value):?>
