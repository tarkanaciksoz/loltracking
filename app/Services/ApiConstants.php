<?php

namespace App\Services;

class ApiConstants
{
    const SUMMONER_PROFILE_ENDPOINT   = "/getSummonerInfo";
    const MATCH_HISTORY_LIST_ENDPOINT = "/getMatchHistoryList";
    const SUMMONER_RANK_DATA_ENDPOINT = "/getRankData";

    const QUEUE_TYPE_RANKED_FLEX_SR    = "RANKED_FLEX_SR";
    const QUEUE_TYPE_RANKED_SOLO_5x5   = "RANKED_SOLO_5x5";

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
