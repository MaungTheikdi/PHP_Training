<?php
// variables
// Data Types
// = assignment operator
$a = 1;
echo $a;
$a = 'Hi';
$b = 10;
$c = true;
$d = 10.5;

$expression = true;
define('ABOCD', '3.');
if ($a == 1){
    echo "a is equal to 1";
}
?>
<p>

<?php if($expression == true): ?>

    This will show if expression is true
    <p>Paragraph</p>
    <h1 class="a">Heading</h1>
    
    <?php else : ?>
    
    Otherwise  this will show
    
<?php endif ;?>
</p>

<?php
if($expression == false){
    //This will show if expression is true
}
?>
<?php
/*
 echo "Hello World \n"
 echo "Hello World 2 \n"
*/
?>
<?= $a ?>
