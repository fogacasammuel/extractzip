<?php

require "../vendor/autoload.php";

use FogacaSammuel\ExtractZip\Config;
use FogacaSammuel\ExtractZip\Download;
use FogacaSammuel\ExtractZip\Zip;

// (new Download("https://gafred.com.br/plugins/teste.zip", __DIR__))->execute();
// (new Zip(__DIR__ . "/download.zip", __DIR__))->execute()->finish();

$config = (new Config(__DIR__ . "/config.json", __DIR__))->execute(false);
var_dump($config->callback());