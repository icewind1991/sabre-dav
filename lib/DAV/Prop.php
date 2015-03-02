<?php

namespace Sabre\DAV;

/**
 * This class holds the status and value during the progress of a PROPFIND request.
 */
class Prop {
	public $status;
	public $value;

	function __construct($status, $value) {
		$this->status = $status;
		$this->value = $value;
	}
}
