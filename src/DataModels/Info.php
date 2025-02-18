<?php

namespace Zerotoprod\CurlHelperSdk\DataModels;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/curl-helper-sdk
 */
class Info
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const url = 'url';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $url = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const content_type = 'content_type';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $content_type = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const http_code = 'http_code';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $http_code = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const header_size = 'header_size';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $header_size = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const request_size = 'request_size';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $request_size = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const filetime = 'filetime';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $filetime = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const ssl_verify_result = 'ssl_verify_result';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $ssl_verify_result = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const redirect_count = 'redirect_count';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $redirect_count = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const total_time = 'total_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $total_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const namelookup_time = 'namelookup_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $namelookup_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const connect_time = 'connect_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $connect_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const pretransfer_time = 'pretransfer_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $pretransfer_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const size_upload = 'size_upload';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $size_upload = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const size_download = 'size_download';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $size_download = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const speed_download = 'speed_download';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $speed_download = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const speed_upload = 'speed_upload';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $speed_upload = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const download_content_length = 'download_content_length';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $download_content_length = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const upload_content_length = 'upload_content_length';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $upload_content_length = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const starttransfer_time = 'starttransfer_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $starttransfer_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const redirect_time = 'redirect_time';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?float $redirect_time = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const redirect_url = 'redirect_url';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $redirect_url = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const primary_ip = 'primary_ip';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $primary_ip = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const certinfo = 'certinfo';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?array $certinfo = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const primary_port = 'primary_port';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $primary_port = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const local_ip = 'local_ip';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $local_ip = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const local_port = 'local_port';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $local_port = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const http_version = 'http_version';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $http_version = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const protocol = 'protocol';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $protocol = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const ssl_verifyresult = 'ssl_verifyresult';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $ssl_verifyresult = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const scheme = 'scheme';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?string $scheme = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const appconnect_time_us = 'appconnect_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $appconnect_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const connect_time_us = 'connect_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $connect_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const namelookup_time_us = 'namelookup_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $namelookup_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const pretransfer_time_us = 'pretransfer_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $pretransfer_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const redirect_time_us = 'redirect_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $redirect_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const starttransfer_time_us = 'starttransfer_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $starttransfer_time_us = null;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public const total_time_us = 'total_time_us';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-sdk
     */
    public ?int $total_time_us = null;
}