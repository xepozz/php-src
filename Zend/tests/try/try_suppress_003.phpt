--TEST--
Parsing test
--FILE--
<?php

$a = 1;

try {
    1 / 0;
    $a = 2;
}
echo $a;

?>
--EXPECT--
1