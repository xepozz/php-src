--TEST--
Memory leaks
--FILE--
<?php
function t() {
    return new stdClass() + (null ?? return);
}
t();
?>
--EXPECT--
