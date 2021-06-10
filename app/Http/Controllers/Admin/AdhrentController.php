<?php

namespace App\Http\Controllers\Admin;

use App\Adhrent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdhrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adhrent.index' ,['adhrents'=> Adhrent::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adhrent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validateData = $request->validate($this->validationRules()) ;
         
         $adhrent = Adhrent::create($validateData);
         return redirect()->route('adhrents.show', $adhrent);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function show(Adhrent $adhrent)
    {
        //$adhrent = Adhrent::find($id);
        return view('admin.adhrent.show', ['adhrent'=>$adhrent] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function edit(Adhrent $adhrent)
    {
        return view('admin.adhrent.edit', ['adhrent'=>$adhrent] ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adhrent $adhrent)
    {
        $validateData = $request->validate($this->validationRules()) ;
        $adhrent->update($validateData);
        return view('admin.adhrent.show', ['adhrent'=>$adhrent] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adhrent  $adhrent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adhrent $adhrent)
    {
        $adhrent->delete();
        return redirect()->route('adhrents.index');
    }

    private function validationRules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'n°_cin' => 'required',
            'adresse_courriel' => 'required',
            'club_id' => 'required',
        ];
    }
}
