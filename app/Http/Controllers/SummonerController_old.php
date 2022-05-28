<?php

namespace App\Http\Controllers;

class SummonerController_old extends Controller
{
    const CLASS_NAME = "summoner";

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return parent::render(self::CLASS_NAME, __FUNCTION__);
    }

    public function profile($server, $summonerName) {
        return parent::render(self::CLASS_NAME, __FUNCTION__);
    }

}
