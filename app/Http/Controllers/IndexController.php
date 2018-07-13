<?php

namespace App\Http\Controllers\A;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $now = Carbon::now();

        return view('index')
            ->with('now', $now);
    }
}
