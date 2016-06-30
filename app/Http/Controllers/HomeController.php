<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Story;
use App\SiteEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'donate',
            'contacts'
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteEvents = SiteEvent::all();
        return view('basic.main', compact('siteEvents'));
    }

    public function donate()
    {
        return view('basic.donate');
    }

    public function contacts()
    {
        return view('basic.contacts');
    }
}
