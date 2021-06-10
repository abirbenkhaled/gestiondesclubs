<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index', ['events' => Event::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // var_dump($request);
        
        $validatedData = $request->validate([
        'recepteur'=>'required',
        'destinataire'=>'required',
        'date'=>'required',
        'sujet'=>'required',
        ]);
       $validatedData['club_id']=1;     
        $event = Event::create ($validatedData);
        return redirect()->route('events.show',$event);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $event = Event::find($id);
        return view('admin.event.show',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {

        return view('admin.event.edit',['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
      //  dd($request);
        $validatedData = $request->validate([
            'recepteur'=>'required',
            'destinataire'=>'required',
            'date'=>'required',
            'sujet'=>'required',
            ]);
       $event->update($validatedData);   
    
       return redirect()->route('events.show',$event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->back();
    }
}
