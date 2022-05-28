<?php

namespace App\Services;

class Constants
{
    const CLASS_NAME = "summoner";
    const LEAGUE_OF_LEGENDS_NAME = 'LeagueOfLegends';
    const HTTP_STATUS_SUCCESS = 200;

    const METHOD_GET    = "get";
    const METHOD_POST   = "post";
    const METHOD_PUT    = "put";
    const METHOD_DELETE = "delete";
    const ALLOWED_REQUEST_METHODS = [
        self::METHOD_GET,
        self::METHOD_POST,
        self::METHOD_PUT,
        self::METHOD_DELETE,
    ];
}
