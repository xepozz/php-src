--TEST--
Parsing test
--FILE--
<?php

try {
    0 / 1;
}
echo 123;

?>
--EXPECT--
123
