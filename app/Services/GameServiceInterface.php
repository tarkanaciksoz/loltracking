<?php

namespace App\Services;

interface GameServiceInterface
{
    /**
     * @param string $server
     * @param string $summonerName
     * @return mixed
     */
    public function profile(string $server, string $summonerName): mixed;

    /**
     * @param string $server
     * @param string $encryptedSummonerId
     * @return mixed
     */
    public function rankData(string $server, string $encryptedSummonerId): mixed;
}
