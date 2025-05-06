--TEST--
Parsing test
--FILE--
<?php

try {
    echo 1;
}
echo 23;

?>
--EXPECT--
123
