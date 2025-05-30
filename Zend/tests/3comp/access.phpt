--TEST--
Print extension form
--FILE--
<?php

namespace foo;

class abc {
	private $private = 'private';
	protected $protected = 'protected';
	public $public = 'public';
}

function ::abc hasName(): bool {
	var_dump(__CLASS__);
	var_dump($this->private);
	var_dump($this->protected);
	var_dump($this->public);

	return true;
}

(new abc)->hasName();

?>
--EXPECTF--
