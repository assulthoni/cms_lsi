@extends('layouts.sidebar')
@section('content')
<div class="row">
    <h3 class="menu-title ml-3 mb-3">
        Tugas Akhir Tahun Berdasarkan Kategori
    </h3>
</div>

<div class="form-group select-form">
    <form action="" class="form-control search-input" method="POST">
        {{csrf_field()}}
        <select name="select_kategori" id="select_kategori" class="select-tahun" onchange="location = this.value;">
            <option value="" disabled selected>
                Pilih Kategori
            </option>
            @foreach($kategori as $kategori)
            <option value="{{ URL::to('/kategori/' . $kategori->id_kategori)}}" {{ isset($select_kategori) ? ($select_kategori == $kategori->id_kategori ? 'selected' : ' ') : ' ' }}>
                {{$kategori->kategori}}
            </option>
            @endforeach
        </select>
    </form>
</div>

<!--                loop disini -->
<!--                sembunyikan ketika belum ada pilihan tahun-->

<div class="row">
    @foreach($tugas_akhir as $ta)
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-body row">
                <div class="col-md-1 col-lg-1 col-sm-1">
                    <!--                                     ini icon untuk file-->
                    <a href="{{asset('storage/TA/'.$ta->nama_file)}}" target="_blank">
                        <h1><i class="fa fa-file"></i></h1>
                    </a>
                </div>
                <div class="col-md-11 col-lg-11 col-sm-11">
                    <h4 class="article-title border-left-primary p-2">
                        {{$ta->judul}}
                    </h4>
                    <div>
                        <h6>
                            {{$ta->tahun}}
                        </h6>
                    </div>
                    <h5>
                        {{$ta->penulis}}
                    </h5>
                    <p>
                        {{$ta->abstract}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection