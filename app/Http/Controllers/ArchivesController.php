<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;
use Illuminate\Support\Facades\Storage;

class ArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives = new Archive;
        return view('archives.index')->with('archives', $archives);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('archives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('fichier')){
            // Get filename with the extension
            $filenameWithExt = $request->file('fichier')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('fichier')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('fichier')->storeAs('public/fichier', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $archives = new Archive;
        $archives->intitule_archive = $request->input('intitule_archive');
        $archives->traitement = $request->input('traitement');
        $archives->fichier = $fileNameToStore;
       // $archives->fichier = $request->input('fichier');
        $archives->type = $request->input('type');
        $archives->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('archives.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('archives.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $archives = Archive::find($id);
        if($archives->fichier != 'noimage.jpg'){
            Storage::delete('public/fichier/'.$archives->fichier);
        }
        $archives->delete();
        return redirect('/home');
    }
}
