# Zerotoprod\CurlHelperSdk

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/curl-helper-sdk)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/curl-helper-sdk/test.yml?label=test)](https://github.com/zero-to-prod/curl-helper-sdk/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/curl-helper-sdk/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/curl-helper-sdk/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/curl-helper-sdk?color=blue)](https://packagist.org/packages/zero-to-prod/curl-helper-sdk/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/curl-helper-sdk.svg?color=purple)](https://packagist.org/packages/zero-to-prod/curl-helper-sdk/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/curl-helper-sdk?color=f28d1a)](https://packagist.org/packages/zero-to-prod/curl-helper-sdk)
[![License](https://img.shields.io/packagist/l/zero-to-prod/curl-helper-sdk?color=pink)](https://github.com/zero-to-prod/curl-helper-sdk/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/curl-helper-sdk.svg)](https://wakatime.com/badge/github/zero-to-prod/curl-helper-sdk)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/curl-helper-sdk?branch=main)](https://hitsofcode.com/github/zero-to-prod/curl-helper-sdk/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A Curl Help Software Development Kit.

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\CurlHelperSdk` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/curl-helper-sdk
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/curl-helper-sdk)
vendor/bin/zero-to-prod-curl-helper-sdk

# Publish to custom directory
vendor/bin/zero-to-prod-curl-helper-sdk /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-curl-helper-sdk"
        ],
        "post-update-cmd": [
            "zero-to-prod-curl-helper-sdk"
        ]
    }
}
```

## Usage

### parseHeaders
Parse curl headers:

```php
use Zerotoprod\CurlHelperSdk\CurlHelperSdk;

$CurlHandle = curl_init('https://google.com');
curl_setopt_array($CurlHandle, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
]);
$response = curl_exec($CurlHandle);
$header_size = curl_getinfo($CurlHandle, CURLINFO_HEADER_SIZE);
curl_close($CurlHandle);

$headers = CurlHelperSdk::parseHeaders($curl_response, $header_size)
```


## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/curl-helper-sdk/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
