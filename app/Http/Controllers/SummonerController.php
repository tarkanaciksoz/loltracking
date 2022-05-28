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
        return parent::render(Constants::CLASS_NAME, __FUNCTION__);
    }

    /**
     * @param SummonerRequest $request
     * @return View
     */
    public function profile(SummonerRequest $request): View {
        $lolService = new GameService(Constants::LEAGUE_OF_LEGENDS_NAME, $request);
        $lolProfile = $lolService->getProfile();

        return parent::render(Constants::CLASS_NAME, __FUNCTION__, $lolProfile);
    }
}
