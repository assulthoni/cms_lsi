<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbTugasAkhir;
use App\Models\TbKategori;
use App\Models\TbKategoriTum;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
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
        $tugas_akhir = TbTugasAkhir::all();
        return view('tampilkan_kategori', compact('tugas_akhir', 'kategori'));
    }

    public function filter($id)
    {
        $kategori = TbKategori::all();
        $tugas_akhir = DB::table('tb_kategori_ta')
            ->join('tb_tugas_akhir', 'tb_kategori_ta.id_ta', '=', 'tb_tugas_akhir.id_ta')
            ->where('id_kategori', '=', $id)
            ->get();

        return view('tampilkan_kategori', compact('tugas_akhir', 'kategori'), ['select_kategori' => $id]);
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
        //
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
        //
    }
}
