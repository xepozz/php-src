--TEST--
Memory leaks
--FILE--
<?php
$b = new stdClass() + (null ?? return);

return $b;
?>
--EXPECT--
