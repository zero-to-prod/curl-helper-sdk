<?php

namespace Zerotoprod\CurlHelperSdk;

use Zerotoprod\CurlHelper\CurlHelper;

class CurlHelperSdk
{
    /**
     * Returns the headers of a request as an array.
     */
    public static function parseHeaders(string $response, int $header_size): array
    {
        return CurlHelper::parseHeaders($response, $header_size);
    }
}