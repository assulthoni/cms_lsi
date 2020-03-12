<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

use App\Models\TbTugasAkhir;

class SearchController extends Controller
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
    public function index(Request $request)
    {

      $query = $request->input('query');
      $result = shell_exec("python ".app_path()."\lsi-script\main.py ".storage_path()."\stopwords_id.txt \"".$query."\" 2>&1");
      $ranking = json_decode($result);
      // dd($ranking);
      return $this->show($ranking);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $result = shell_exec("python ".app_path()."\lsi-script\store_all_abstract.py ".storage_path()."\TA 2>&1");
        var_dump($result);
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
        $result = shell_exec("python ".app_path()."\lsi-script\sql_insert_stopwords.py ".storage_path()."\stopwords.id.txt 2>&1");
        echo($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($sortedranking)
    {
        //
        $count = 0;
        $tugas_akhir = TbTugasAkhir::all();
        $sortedta = array();
        foreach ($sortedranking as $index => $priority) {
          $sortedta[$index] = $tugas_akhir[$priority-1];
        }
        return view('hasil_pencarian', compact('sortedta'));
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
