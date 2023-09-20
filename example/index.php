<?php

require "../vendor/autoload.php";

use FogacaSammuel\ExtractZip\Config;

$pathjson = __DIR__ . "/config.json";

$config = (new Config($pathjson, __DIR__))->execute();
if($config->callback()["error"]) {
    echo $config->callback()["message"];
}

echo $config->callback()["message"];