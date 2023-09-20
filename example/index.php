<?php

require "../vendor/autoload.php";

use FogacaSammuel\ExtractZip\Zip;

//Extraindo arquivo zip
(new Zip(__DIR__ . "/Teste.zip", __DIR__))
->execute()
->delete("config.json")
->finish();