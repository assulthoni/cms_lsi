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
        return view('admin_menu_ta',compact('tugas_akhir','pembimbings','kategoris','program_studi'));
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
    public function store(Request $request){

        $validatedData = $request->validate([
            'nama_file' => 'file|required',
        ]);

        //input file
        $file = $request->file('nama_file');
        $extension = $file->getClientOriginalExtension();
        $filename = $file->getClientOriginalName();
        $file->move('public/TA',$filename);
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
            'id_ta'=> $inserted_id,
            'id_kategori'=> $request->id_kategori,
        ]);

        return redirect('menuta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   //   public function pdfStream(Request $request){
   //   // $user = UserDetail::find($user->id);
   //   // $data["info"] = $user;
   //   // $pdf = PDF::loadView('whateveryourviewname', $data);
   //  return response()->file('public/TA/'.$request->$nama_file);
   // }

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
