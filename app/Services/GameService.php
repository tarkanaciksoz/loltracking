<?php

namespace App\Services;

use App\Http\Requests\SummonerRequest;
use App\Params\SummonerDTO;

class GameService {

    private string $game;
    private SummonerRequest $summonerRequest;

    public function __construct(string $game, SummonerRequest $summonerRequest) {
        $this->summonerRequest = $summonerRequest;
        $this->game            = $game;
    }

    public function getProfile() {
        $gamePrefix = sprintf('\App\Services\Game\%s', $this->game);

        /** @var GameServiceInterface $gameService */
        $gameService  = new $gamePrefix();
        $summonerInfo = $gameService->profile($this->summonerRequest->serverName."1", $this->summonerRequest->summonerName);

        $summoner = new SummonerDTO($summonerInfo);
        dd($summoner);
    }

}
