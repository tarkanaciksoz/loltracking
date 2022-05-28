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
}
