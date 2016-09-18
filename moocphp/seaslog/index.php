<?php

SeasLog::setBasePath('/usr/local/nginx/html/moocphp/seaslog/log');
//echo SeasLog::getBasePath();

SeasLog::setLogger('Web');
SeasLog::debug('it is a debug info');

SeasLog::info('it is a info');
SeasLog::notice('it is a notice');
//SeasLog::e666666('it is a notice');

$data = SeasLog:: analyzerCount();
print_r($data);

$data = SeasLog::analyzerDetail('debug');
print_r($data);
?>
