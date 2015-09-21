<h2><?= 'Default scalar type-hint behavior'; ?></h2>

<?php

function dumpInteger(int $number) {
     var_dump($number);
}

echo 'int(2) passed in. Result: ';
dumpInteger(2);

echo "<br><br>";

echo 'string("2") passed in. Result: ';
dumpInteger('2');

echo "<br><br>";

echo 'bool(true) passed in. Result: ';
dumpInteger(true);

echo "<br><br>";

echo 'float(1.01) passed in. Result: ';
dumpInteger(1.01);

echo "<br><br>";

echo 'object(stdClass) passed in. Result: ';
dumpInteger(new stdClass());

echo "<br><br>";
echo 'test';



