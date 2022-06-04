<?php

namespace App\Services;

use App\Http\Requests\SummonerRequest;
use App\Params\SummonerDTO;

class GameService {

    private string $game;
    private string $summonerName;
    private string $server;

    public function __construct(string $game, SummonerRequest $summonerRequest) {
        $this->server          = $summonerRequest->serverName."1";
        $this->summonerName    = $summonerRequest->summonerName;
        $this->game            = $game;
    }

    public function getProfile() {
        $gamePrefix = sprintf('\App\Services\Game\%s', $this->game);

        /** @var GameServiceInterface $gameService */
        $gameService  = new $gamePrefix();
        $summonerDTO  = new SummonerDTO($gameService->profile($this->server, $this->summonerName));

        $rankData     = $gameService->rankData($this->server, $summonerDTO->getId());
        dd($rankData, $summonerDTO);
    }

}
