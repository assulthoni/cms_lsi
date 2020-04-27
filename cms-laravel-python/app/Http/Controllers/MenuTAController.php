<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use App\Models\TbTugasAkhir;
use App\Models\TbPembimbing;
use App\Models\TbKategori;
use App\Models\TbKategoriTum;
use App\Models\TbProgramStudi;
use Illuminate\Support\Facades\Storage;

class MenuTAController extends Controller
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
        $program_studi = TbProgramStudi::all();
        $kategoris = TbKategori::all();
        $pembimbings = TbPembimbing::all();
        $tugas_akhir = TbTugasAkhir::all();
        return view('admin_menu_ta.index', compact('tugas_akhir', 'pembimbings', 'kategoris', 'program_studi'));
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

        $validatedData = $request->validate([
            'nama_file' => 'file|required',
        ]);

        //input file
        $file = $request->file('nama_file');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName();
        $file->move('storage/TA', $filename);
        // $file = $file->storeAs('public/TA', $filename);
        //input database
        $inserted_id = DB::table('tb_tugas_akhir')->insertGetId([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'id_pembimbing' => $request->id_pembimbing,
            'id_prodi' => $request->id_prodi,
            'abstract' => $request->abstract,
            'nama_file' => $filename,

        ]);

        //input kategori_ta relational
        TbKategoriTum::create([
            'id_ta' => $inserted_id,
            'id_kategori' => $request->id_kategori,
        ]);

        return redirect()->route('menuta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $program_studi = TbProgramStudi::all();
        $kategoris = TbKategori::all();
        $kategori_ta = TbKategoriTum::where('id_ta', $id)->first();
        $pembimbings = TbPembimbing::all();
        $tugas_akhir = TbTugasAkhir::find($id);
        return view('admin_menu_ta.edit', compact('tugas_akhir', 'pembimbings', 'kategoris', 'program_studi', 'kategori_ta'));
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
        //if has new file
        if ($request->hasFile('nama_file')) {
            //Delete Existing File
            $existingFile = TbTugasAkhir::find($id)->nama_file;
            unlink(public_path('storage/TA/' . $existingFile));

            //Put New File
            $file = $request->file('nama_file');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('storage/TA', $filename);

            //Update File name in database
            $updateFile = TbTugasAkhir::find($id)->update([
                'nama_file' => $filename
            ]);
        }

        //update other data
        $tugas_akhir = TbTugasAkhir::find($id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'id_pembimbing' => $request->id_pembimbing,
            'id_prodi' => $request->id_prodi,
            'abstract' => $request->abstract,
        ]);

        //update kategori
        TbKategoriTum::where('id_ta', $id)->update([
            'id_kategori' => $request->id_kategori,
        ]);

        return redirect()->route('menuta.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $file = TbTugasAkhir::find($id)->nama_file;
        TbTugasAkhir::find($id)->delete();
        DB::table('tb_kategori_ta')->where('id_ta',$id)->delete();

        unlink(public_path('storage/TA/' . $file));


        return redirect()->route('menuta.index');
    }
}
