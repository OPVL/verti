<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        return redirect()->back();
    }
}
