@extends('layouts.sidebar')
@section('content')
<div class="row">
    <h3 class="menu-title ml-3 mb-3">
        Hasil Pencarian
    </h3>
</div>
<!--                loop disini-->
@if(isset($sortedta))
@foreach($sortedta as $ta)
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-body row">
                <div class="col-md-1 col-lg-1 col-sm-1">
                    <!--                                     ini icon untuk file-->
                    <a href="{{asset('storage/TA/'.$ta->nama_file)}}" target="_blank"><h1><i class="fa fa-file"></i></h1></a>
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
</div>
@endforeach
@endif
@endsection
