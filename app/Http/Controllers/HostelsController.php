<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostelsController extends Controller
{
    public function hostels()
    {
        $hostels = \App\Hostels::all();
        return view('admin.hostels', compact('hostels'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
