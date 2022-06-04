<?php

namespace App\Services\Game;

use App\Services\ApiClientResponse;
use App\Services\ApiClientService;
use App\Services\ApiConstants;
use App\Services\GameServiceInterface;

class LeagueOfLegends implements GameServiceInterface {
    /**
     * @param string $server
     * @param string $summonerName
     * @return mixed
     */
    public function profile(string $server, string $summonerName): mixed
    {
        $url       = sprintf('%s%s', config('constants.api_url'), ApiConstants::SUMMONER_PROFILE_ENDPOINT);
        $dataArray = [
            'server' => $server,
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

    /**
     * @param string $server
     * @param string $encryptedSummonerId
     * @return mixed
     */
    public function rankData(string $server, string $encryptedSummonerId): mixed {
        $url       = sprintf('%s%s', config('constants.api_url'), ApiConstants::SUMMONER_RANK_DATA_ENDPOINT);
        $dataArray = [
            'server' => $server,
            'id' => $encryptedSummonerId
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
