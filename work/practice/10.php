<?php

// defineとconstは微妙な違いがある。
$name = 'tatsuya';
$name = 'dotinstall';

define('NAME','tatsuya'); //tatsuyaを優先
echo NAME . PHP_EOL;

const NAME = 'tatsuya';
const NAME = 'dotinstall' //最初に定義したtaysuyaになる。

echo NAME . PHP_EOL;