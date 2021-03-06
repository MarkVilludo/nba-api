<?php

namespace JasonRoman\NbaApi\Request\Api;

use JasonRoman\NbaApi\Request\AbstractNbaApiRequest;

/**
 * Base class which any Api requests must extend from (from api.nba.net)
 */
abstract class AbstractApiRequest extends AbstractNbaApiRequest
{
    const BASE_URI = 'http://api.nba.net';

    const HEADERS = [
        'Origin' => 'http://api.nba.net',
        'Host'   => 'api.nba.net',
    ];

    const CONFIG = [
        'base_uri' => self::BASE_URI,
    ];
}