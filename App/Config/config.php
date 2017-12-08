<?php

return [
    /*
     *    日志记录方式
     * -----------------
     *  single || daily
     */
    'log'             => 'single',


    /*
     *     调试模式
     * ----------------
     *  true || false
     */
    'debug'           => true,


    /**
     * 版本控制
     */
    'version_control' => false,


    /**
     * https端口
     */
    'https_port'      => 443,


    /**
     * Smarty配置
     */
    'smarty'          => [
        "debugging"       => false,
        "caching"         => false,
        "cache_lifetime"  => 120,
        "left_delimiter"  => "<{",
        "right_delimiter" => "}>"
    ],


    /**
     * 类名别名
     */
    'aliases'         => [
        'Api'                     => Zereri\Lib\Replacement\Api::class,
        'Factory'                 => Zereri\Lib\Basic\Factory::class,
        'App\Models\Model'        => Zereri\Lib\Db\Model::class,
        'App\Queues\InQueue'      => Zereri\Lib\Interfaces\InQueue::class,
        'App\Middles\MiddleWare'  => Zereri\Lib\Interfaces\MiddleWare::class,
        'App\Controllers\Smarty'  => Zereri\Lib\Replacement\Smarty::class,
        'App\Controllers\Session' => Zereri\Lib\Replacement\Session::class,
        'App\Controllers\Cache'   => Zereri\Lib\Replacement\Cache::class
    ],


    /**
     *      Session
     * --------------------
     *   file || memcached || redis
     */
    'session'         => [
        'drive' => 'file'
    ],


    /**
     * 允许跨域的源地址，默认为允许全部
     */
    'origin'          => "*",


    /**
     * 调用Api允许携带头部字段名
     */
    'headers'         => [
        "content-type"
    ],
    

    /**
     * 状态码
     */
    'status_code'     => [
        100 => "HTTP/1.1 100 Continue",
        101 => "HTTP/1.1 101 Switching Protocols",
        200 => "HTTP/1.1 200 OK",
        201 => "HTTP/1.1 201 Created",
        202 => "HTTP/1.1 202 Accepted",
        203 => "HTTP/1.1 203 Non-Authoritative Information",
        204 => "HTTP/1.1 204 No Content",
        205 => "HTTP/1.1 205 Reset Content",
        206 => "HTTP/1.1 206 Partial Content",
        300 => "HTTP/1.1 300 Multiple Choices",
        301 => "HTTP/1.1 301 Moved Permanently",
        302 => "HTTP/1.1 302 Found",
        303 => "HTTP/1.1 303 See Other",
        304 => "HTTP/1.1 304 Not Modified",
        305 => "HTTP/1.1 305 Use Proxy",
        307 => "HTTP/1.1 307 Temporary Redirect",
        400 => "HTTP/1.1 400 Bad Request",
        401 => "HTTP/1.1 401 Unauthorized",
        402 => "HTTP/1.1 402 Payment Required",
        403 => "HTTP/1.1 403 Forbidden",
        404 => "HTTP/1.1 404 Not Found",
        405 => "HTTP/1.1 405 Method Not Allowed",
        406 => "HTTP/1.1 406 Not Acceptable",
        407 => "HTTP/1.1 407 Proxy Authentication Required",
        408 => "HTTP/1.1 408 Request Time-out",
        409 => "HTTP/1.1 409 Conflict",
        410 => "HTTP/1.1 410 Gone",
        411 => "HTTP/1.1 411 Length Required",
        412 => "HTTP/1.1 412 Precondition Failed",
        413 => "HTTP/1.1 413 Request Entity Too Large",
        414 => "HTTP/1.1 414 Request-URI Too Large",
        415 => "HTTP/1.1 415 Unsupported Media Type",
        416 => "HTTP/1.1 416 Requested range not satisfiable",
        417 => "HTTP/1.1 417 Expectation Failed",
        500 => "HTTP/1.1 500 Internal Server Error",
        501 => "HTTP/1.1 501 Not Implemented",
        502 => "HTTP/1.1 502 Bad Gateway",
        503 => "HTTP/1.1 503 Service Unavailable",
        504 => "HTTP/1.1 504 Gateway Time-out",
    ]
];