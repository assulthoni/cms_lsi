@extends('layouts.sidebar')
@section('content')
<div class="row">
    <h3 class="menu-title ml-3 mb-3">
        Menu Tugas Akhir
    </h3>
</div>
<button class="btn btn-search login-input" data-target="#tambahTAModal" data-toggle="modal">
    Tambah Tugas Akhir
</button>

<div class="col-md-12 col-lg-12 col-sm-12 mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tugas Akhir</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tahun</th>
                            <th>Penulis</th>
                            <th>Abstrak</th>
                            <th>File</th>
                        </tr>
                    </thead>

                    @foreach($tugas_akhir as $ta)
                    <tbody>
                        <tr>
                            <td>{{$ta->judul}}</td>
                            <td>{{$ta->tahun}}</td>
                            <td>{{$ta->penulis}}</td>
                            <td>{{$ta->abstract}}</td>
                            <td><a href="{{asset('storage/TA/'.$ta->nama_file)}}" target="_blank">
                                {{$ta->nama_file}}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach


                </table>
            </div>
        </div>



    </div>
</div>



{{--MODAl--}}

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="tambahTAModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahTAModalModal">Tambah Tugas Akhir?</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Masukkan Data Tugas Akhir</p>
                <form action="{{URL::to('menuta') }}" enctype="multipart/form-data" class="form-login text-center" method='POST'>
                    {{ csrf_field() }}
                    <input type="text" placeholder="Masukkan Judul" name="judul" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

                    <input type="number" placeholder="Masukkan Tahun" id="tahun" name="tahun" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

                    <input type="text" placeholder="Masukkan Penulis" name="penulis" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

                    <select name="id_pembimbing" id="id_pembimbing" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                        <option value="" disabled selected>
                            Pilih Pembimbing
                        </option>
                        @foreach($pembimbings as $pembimbing)
                        <option value="{{$pembimbing->id_pembimbing}}">
                            {{$pembimbing->nama_pembimbing}}
                        </option>
                        @endforeach
                    </select>
                    
                    <select name="id_kategori" id="id_kategori" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                        <option value="" disabled selected>
                            Pilih Kategori
                        </option>
                        @foreach($kategoris as $kategori)
                            <option value="{{$kategori->id_kategori}}">
                                {{$kategori->kategori}}
                            </option>
                        @endforeach
                    </select>

                    <select name="id_prodi" id="id_prodi" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                        <option value="" disabled selected>
                            Pilih Program Studi
                        </option>
                        @foreach($program_studi as $ps)
                            <option value="{{$ps->id_prodi}}">
                                {{$ps->nama_prodi}}
                            </option>
                        @endforeach
                    </select>

                    <textarea name="abstract" id="" cols="30" rows="10" class="register-input search-input input-group form-control border-0 search-input margin-bottom" required></textarea>
                    <input type="file" placeholder="Masukkan File" id= "nama_file" name="nama_file" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                    <hr class="sidebar-divider">
                    <button type="submit" class="login-input btn btn-search input-group form-control border-0 search-input search-index">
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection