--TEST--
a < b < c comparation
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


function ::stdClass hasName(): bool {
    echo get_class($this);

    return true;
}

$class = new stdClass;
$r = $class->hasName();

var_dump($r);

?>
--EXPECTF--
stdClass
bool(true)