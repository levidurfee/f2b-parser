<?php

namespace levidurfee;

class f2bParser implements f2bParserInterface {
	public $filename;
	public $rawLogs;
	public $ips = [];
	public function __construct($filename) {
		$this->rawLogs = file_get_contents($filename);
	}

	public function run() {
		// Ban.*
		$lines = explode("\n", $this->rawLogs);
		foreach($lines as $line) {
			$matches = [];
			preg_match('/Ban.*/', $line, $matches);
			if(count($matches) > 0) {
				//echo $matches[0] . "\n";
				$this->ips[str_replace("Ban ", "", $matches[0])] = true;
			}
		}
	}
}