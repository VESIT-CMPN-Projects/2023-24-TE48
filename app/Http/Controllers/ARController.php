<?php

namespace App\Http\Controllers;

use App\Models\AR;
use Illuminate\Http\Request;

class ARController extends Controller
{
    public function show(AR $AR) {
        return view('frontend.AR.show', compact(['AR']));
    }
}
