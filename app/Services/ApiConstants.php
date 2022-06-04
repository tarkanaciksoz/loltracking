<?php

namespace App\Services;

class ApiConstants
{
    const SUMMONER_PROFILE   = "getSummonerInfo";
    const MATCH_HISTORY_LIST = "getMatchHistoryList";
    const SUMMONER_RANK_DATA = "getRankData";

    const HTTP_STATUS_SUCCESS = 200;
    const HTTP_STATUS_BAD_REQUEST = 400;

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
