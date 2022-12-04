<?php

use Koriym\EnvJson\EnvJson;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

(new EnvJson(__DIR__))->load();

assert(getenv('FOO') === 'foo1');
assert(getenv('BAR') === 'bar1');

echo 'It works!' . PHP_EOL;
