--TEST--
Extension to a userland defined class
--FILE--
<?php

/**
#[Extension("stdClass")]
function hasName(): bool {
    return property_exists($this->name);
}
function stdClass::hasName(): bool {
    return property_exists($this->name);
}
function stdClass@hasName(): bool {
    return property_exists($this->name);
}
function stdClass.hasName(): bool {
    return property_exists($this->name);
}

// use function hasName;
**/

class abc{}

function ::abc hasName(): bool {
    var_dump(get_class($this));

    return true;
}

$class = new abc;
$r = $class->hasName();

var_dump($r);

?>
--EXPECTF--
string(8) "abc"
bool(true)