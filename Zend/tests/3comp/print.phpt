--TEST--
Print extension form
--FILE--
<?php

try {
	assert(false && function() {
		function ::abc hasName(): bool {
			var_dump(get_class($this));

			return true;
		}
	});
} catch (Throwable $e) {
	echo $e->getMessage() . PHP_EOL;
}

?>
--EXPECTF--
assert(false && function () {
    function ::abc hasName(): bool {
        var_dump(get_class($this));
        return true;
    }

})