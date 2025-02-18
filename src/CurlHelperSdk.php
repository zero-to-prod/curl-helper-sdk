<?php

namespace Zerotoprod\CurlHelperSdk;

use Zerotoprod\CurlHelper\CurlHelper;

/**
 * A Curl Help Software Development Kit.
 *
 * @link https://github.com/zero-to-prod/curl-helper-sdk
 */
class CurlHelperSdk
{
    /**
     * Returns the headers of a request as an array.
     *
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public static function parseHeaders(string $response, int $header_size): array
    {
        return CurlHelper::parseHeaders($response, $header_size);
    }
}