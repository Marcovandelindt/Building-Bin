<?php

namespace App\Http\Controllers\Frontend\Landingspage;

use App\Http\Controllers\Controller;

class LandingspageController extends Controller
{
    /**
     * Load landingspage
     */
    public function loadLandingspage($landingspage)
    {
        if (!empty($landingspage)) {
            $template = ucfirst($landingspage);

            $data = [
                'title'        => $template,
                'landingspage' => $template,
            ];

            $path = 'frontend.landingspages.' . $template . '.index';

            if (view()->exists($path)) {
                return view($path)->with($data);
            }

            abort(404);
        }
    }
}


