<?php

namespace App\Services;

use App\Http\Requests\SummonerRequest;
use App\Params\LeagueEntryDTO;
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

        $leagueFlex = $leagueSoloQ = new LeagueEntryDTO();
        foreach($rankData as $rank) {
            $tempRank = new LeagueEntryDTO($rank);

            if($tempRank->getQueueType() == ApiConstants::QUEUE_TYPE_RANKED_SOLO_5x5) {
                $leagueSoloQ = $tempRank;
            }elseif($tempRank->getQueueType() == ApiConstants::QUEUE_TYPE_RANKED_FLEX_SR) {
                $leagueFlex = $tempRank;
            }
        }

        return [
            'summoner' => $summonerDTO,
            'leagueSoloQ' => $leagueSoloQ,
            'leagueFlex' => $leagueFlex,
        ];
    }
}
