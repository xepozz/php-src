--TEST--
Empty while subject with default "true"
--FILE--
<?php
$i = 0;
while {
    $i++;
    if ($i == 5) break;
}
var_dump($i);

?>
--EXPECT--
int(5)