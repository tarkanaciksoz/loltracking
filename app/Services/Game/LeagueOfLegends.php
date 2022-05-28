<?php

namespace App\Services\Game;

use App\Services\ApiClientResponse;
use App\Services\ApiClientService;
use App\Services\ApiConstants;
use App\Services\Constants;
use App\Services\GameServiceInterface;
use Illuminate\Support\Facades\Http;

class LeagueOfLegends implements GameServiceInterface {
    /**
     * @param string $server
     * @param string $summonerName
     * @return mixed
     */
    public function profile(string $server, string $summonerName): mixed
    {
        $url       = sprintf('%s%s', config('constants.api_url'), ApiConstants::SUMMONER_PROFILE);
        $dataArray = [
            'server' => $server."1",
            'userName' => $summonerName
        ];

        $client = new ApiClientService();
        $response = $client->setMethod(ApiConstants::METHOD_GET)
            ->setUrl($url)
            ->setData($dataArray)
            ->sendRequest();
        if($response->getSuccess()) {
            $result = json_decode($response->getData());
            return (new ApiClientResponse([
                'success' => $result->Success,
                'message' => $result->Message,
                'data'    => $result->Data,
                'code'    => $result->Code,
            ]))->getData();
        }

        return $response->getData();
    }
}
