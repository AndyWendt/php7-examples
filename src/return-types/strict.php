<?php

declare(strict_types=1);

?>

    <h2><?= 'Strict return type-hint behavior'; ?></h2>

<?php

function returnInteger($var) : int {
    return $var;
}

echo 'int(2) passed in. Result: ';
var_dump(returnInteger(2));

echo "<br><br>";

echo 'string("2") passed in. Result: ';
var_dump(returnInteger('2'));

echo "<br><br>";

echo 'bool(true) passed in. Result: ';
var_dump(returnInteger(true));

echo "<br><br>";

echo 'float(1.01) passed in. Result: ';
var_dump(returnInteger(1.01));

echo "<br><br>";

echo 'object(stdClass) passed in. Result: ';
var_dump(returnInteger(new stdClass()));



