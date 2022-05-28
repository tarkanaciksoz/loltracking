<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param $controllerName
     * @param $functionName
     * @param $data
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
     */
    public static function render($controllerName, $functionName, $data = null): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application {
        $controllerName = strtolower($controllerName);
        $functionName   = strtolower($functionName);

        $layout         = sprintf("/master-pages/%s/layout", $controllerName);
        $content        = sprintf("/partials/%s/%s", $controllerName, $functionName);
        $navbar         = sprintf("/master-pages/%s/%s", $controllerName, "navbar");
        $distDir        = sprintf("%s/dist/", url(''));

        return view($layout, [
            'content' => $content,
            'navbar'  => $navbar,
            'distDir' => $distDir,
            'data'    => $data
        ]);
    }
}
