<?php

require "../vendor/autoload.php";

use FogacaSammuel\ExtractZip\Zip;

//Extraindo arquivo zip
$zip = (new Zip(__DIR__ . "/testzip.zip", __DIR__))->execute()->finish();
var_dump($zip->callback());