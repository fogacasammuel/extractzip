# Blog Library Test

[![Source Code](http://img.shields.io/badge/source-fogacasammuel/extractzip-blue.svg?style=flat-square)](https://github.com/fogacasammuel/extractzip)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/fogacasammuel/extractzip.svg?style=flat-square)](https://packagist.org/packages/fogacasammuel/extractzip)
[![Latest Version](https://img.shields.io/github/release/fogacasammuel/extractzip.svg?style=flat-square)](https://github.com/fogacasammuel/extractzip/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/fogacasammuel/extractzip.svg?style=flat-square)](https://scrutinizer-ci.com/g/fogacasammuel/extractzip)
[![Quality Score](https://img.shields.io/scrutinizer/g/fogacasammuel/extractzip.svg?style=flat-square)](https://scrutinizer-ci.com/g/fogacasammuel/extractzip)
[![Total Downloads](https://img.shields.io/packagist/dt/fogacasammuel/extractzip.svg?style=flat-square)](https://packagist.org/packages/cfogacasammuel/extractzip)

###### Extract Zip is a library for manipulating zip files within your architecture.

Extract Zip é uma biblioteca para manipulação de arquivos zip dentro da sua arquitetura.

Você pode saber mais **[clicando aqui](https://github.com/fogacasammuel/extractzip)**.

### Highlights

- Simple installation (Instalação simples)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"fogacasammuel/extractzip": "^1.0"
```

or run

```bash
composer require fogacasammuel/extractzip
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### User endpoint:

```php
<?php

require "../vendor/autoload.php";

use FogacaSammuel\ExtractZip\Zip;

//Extraindo arquivo zip
$zip = (new Zip(__DIR__ . "/testzip.zip", __DIR__))->execute()->finish();
var_dump($zip->callback());
```

## Contributing

Please see [CONTRIBUTING](https://github.com/fogacasammuel/uploader/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email sammuel.fogaca@gmail.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para sammuel.fogaca@gmail.com em vez de usar o rastreador de problemas.

Thank you!

## Credits

- [Samuel Fogaça](https://github.com/fogacasammuel) (Developer)
- [All Contributors](https://github.com/fogacasammuel/uploader/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/fogacasammuel/extractzip/blob/master/LICENSE) for more information.