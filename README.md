# HttpResponse Component

[![Latest Version](https://img.shields.io/github/release/ThrusterIO/http-response.svg?style=flat-square)]
(https://github.com/ThrusterIO/http-response/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)]
(LICENSE)
[![Build Status](https://img.shields.io/travis/ThrusterIO/http-response.svg?style=flat-square)]
(https://travis-ci.org/ThrusterIO/http-response)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/ThrusterIO/http-response.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/http-response)
[![Quality Score](https://img.shields.io/scrutinizer/g/ThrusterIO/http-response.svg?style=flat-square)]
(https://scrutinizer-ci.com/g/ThrusterIO/http-response)
[![Total Downloads](https://img.shields.io/packagist/dt/thruster/http-response.svg?style=flat-square)]
(https://packagist.org/packages/thruster/http-response)

[![Email](https://img.shields.io/badge/email-team@thruster.io-blue.svg?style=flat-square)]
(mailto:team@thruster.io)

The Thruster HttpResponse Component.


## Install

Via Composer

```bash
$ composer require thruster/http-response
```

## Usage

```php

use Thruster\Component\HttpResponse\ResponseBuilder;

$response = ResponseBuilder::init($response)->withJsonBody($data);
$response = ResponseBuilder::init($response)->withJsonBody($data, 'application/vnd.thruster+json');
```


## Testing

```bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.


## License

Please see [License File](LICENSE) for more information.
