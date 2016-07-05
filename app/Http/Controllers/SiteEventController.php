<?php

namespace App\Http\Controllers;

use App\SiteEvent;
use App\Http\Requests\SiteEventRequest;
use App\Http\Requests;
use Illuminate\Http\Request;

class SiteEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'show'
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteEvents = SiteEvent::all();
        return view('basic.site-event', compact('siteEvents'));
    }

    public function adminIndex()
    {
        $siteEvents = SiteEvent::all();
        return view('admin_panel.site-events', compact('siteEvents'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.createsiteevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteEventRequest $request)
    {
        $input = $request->all();  

        $newStory = SiteEvent::create($input);
        $newStory->user_id = $request->user()->id;
        $newStory->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($site_event)
    {
        return view('basic.site-event', compact('site_event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($site_event)
    {
        return view('admin_panel.editsiteevent', compact('site_event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiteEventRequest $request, $site_event)
    {
        $input = $request->all();
        $site_event->update($input); 
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($site_event)
    {
        $site_event->delete();
        return redirect('admin');
    }
}
