<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album; 

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rows = Album::all(); 
         return view('album.index_album', compact('rows')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.add_album'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
         $request->validate([
             'album_id' => 'bail|required|unique:tb_album', 'album_name' => 'required'
        ],
        [
            'album_id.required' => 'ID wajib diisi',
            'album_id.unique' => 'Nomor ID sudah ada', 
            'album_name.required' => 'Nama wajib diisi'
        ]);

          Album::create([ 
            'album_id' => $request->album_id,
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photos_id' => $request->photos_id
        ]);

        return redirect('/album'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Album::findOrFail($id);
         return view('album.edit_album', compact('row'));
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
         $request->validate([ 
            'album_id' => 'bail|required|unique:tb_album', 'album_name' => 'required'
        ],
        [
            'album_id.required' => 'ID wajib diisi',
            'album_id.unique' => 'Nomor ID sudah ada', 
            'album_name.required' => 'Nama wajib diisi'
        ]);

         $row = Album::findOrFail($id); 
         $row->update([
            'album_id' => $request->album_id,
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photos_id' => $request->photos_id
        ]);

          return redirect('/album'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $row = Album::findOrFail($id);
         $row->delete();

         return redirect('/album'); 
    }
}
