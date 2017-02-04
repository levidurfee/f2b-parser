<?php

namespace levidurfee;

class f2b {
	public $parser;
	public $db;
	public function __construct(f2bParserInterface $parser, f2bdbInterface $db) {
		$this->parser = $parser;
		$this->db = $db;
	}

	public function run() {
		$this->parser->run();		
	}

	public function dump() {
		var_dump($this->parser->ips);
	}
}