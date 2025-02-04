--TEST--
Empty switch subject with default "true"
--FILE--
<?php
switch {
    case 1: echo "1 is matched"; break;
    case 0: echo "0 is matched"; break;
    default: echo "default is matched"; break;
}
echo PHP_EOL;

switch {
    case "test": echo '"test" is matched'; break;
    default: echo "default is matched"; break;
}

echo PHP_EOL;

switch {
    case 0: echo "0 is matched"; break;
    default: echo "default is matched"; break;
}

?>
--EXPECT--
1 is matched
"test" is matched
default is matched
