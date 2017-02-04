<?php

include 'vendor/autoload.php';

use levidurfee\f2b;
use levidurfee\f2bParser;
use levidurfee\f2bdb;

$f2b = new f2b(
	new f2bParser('f2b.log'),
	new f2bdb('test', 'test', 'test', 'test')
);

$f2b->run();

$f2b->dump();