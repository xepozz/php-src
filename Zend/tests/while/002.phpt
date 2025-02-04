--TEST--
Empty do-while subject with default "true"
--FILE--
<?php
$i = 0;
do {
    $i++;
    if ($i == 5) break;
} while;
var_dump($i);

$i = 0;
do break; while (true);
var_dump($i);

$i = 0;
do break; while;
var_dump($i);

?>
--EXPECT--
int(5)
int(0)
int(0)