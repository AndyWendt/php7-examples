

<h2><?= 'Combined Comparison Operator -- aka Spaceships'; ?></h2>

<?php

$a = [1,2,3,4];

usort($a, function ($a, $b) {
    return $b <=> $a; // -1 less than, 0 equal, 1 greater than
});

var_dump($a);

echo '<br><br>';

var_dump(2 <=> 2);
