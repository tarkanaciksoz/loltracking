<?php

namespace App\Http\Controllers;

use App\Http\Requests\SummonerRequest;
use App\Services\Constants;
use App\Services\GameService;
use Illuminate\Contracts\View\View;

class SummonerController extends Controller
{

    /**
     * @return View
     */
    public function index(): View {
        return parent::render(Constants::SUMMONER_CLASS_NAME, __FUNCTION__);
    }

    /**
     * @param SummonerRequest $request
     * @return View
     */
    public function profile(SummonerRequest $request): View {
        $gameService = new GameService(Constants::LEAGUE_OF_LEGENDS_NAME, $request);
        $profileData = $gameService->getProfile();
        
        return parent::render(Constants::SUMMONER_CLASS_NAME, __FUNCTION__, $profileData);
    }
}
