<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\TbKategori;

class MenuKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kategori = TbKategori::all();

        return view('admin_menu_kategori.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //input kategori
        $validatedData = $request->validate([
            'kategori' => 'required',
        ]);

        TbKategori::create($request->all());
    
        return redirect()->route('menukategori.index');
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
        //
        $kategori = TbKategori::find($id);
        return view('admin_menu_kategori.edit',compact('kategori'));
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
        $validatedData = $request->validate([
            'kategori' => 'required',
        ]);
        $kategori = TbKategori::find($id)->update([
            'kategori' => $request->kategori
        ]);

        return redirect()->route('menukategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        TbKategori::find($id)->delete();
        return redirect()->route('menukategori.index');
    }
}
