<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::all(); 
        return view('category.index_category', compact('rows')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.add_category'); 
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
             'cat_id' => 'bail|required|unique:tb_category', 'cat_name' => 'required'
        ],
        [
            'cat_id.required' => 'ID wajib diisi',
            'cat_id.unique' => 'Nomor ID sudah ada', 
            'cat_name.required' => 'Nama wajib diisi'
        ]);

          Category::create([ 
            'cat_id' => $request->cat_id,
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
        ]);

        return redirect('/category'); 
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
        $row = Category::findOrFail($id);
         return view('category.edit_category', compact('row'));
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
             'cat_id' => 'bail|required|unique:tb_category', 'cat_name' => 'required'
        ],
        [
            'cat_id.required' => 'ID wajib diisi',
            'cat_id.unique' => 'Nomor ID sudah ada', 
            'cat_name.required' => 'Nama wajib diisi'
        ]);

        $row = Category::findOrFail($id); 
        $row->update([ 
            'cat_id' => $request->cat_id,
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
        ]);

        return redirect('/category'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Category::findOrFail($id);
         $row->delete();

         return redirect('/category'); 
    }
}
