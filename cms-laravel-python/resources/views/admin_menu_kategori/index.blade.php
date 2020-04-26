@extends('layouts.sidebar')
@section('content')
<div class="row">
    <h3 class="menu-title ml-3 mb-3">
        Menu Kategori
    </h3>
</div>
<button class="btn btn-search login-input" data-target="#tambahKategoriModal" data-toggle="modal">
    Tambah Kategori
</button>

<div class="col-md-12 col-lg-12 col-sm-12 mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    @foreach($kategori as $kategori)
                    <tbody>
                        <tr>
                            <td>{{$kategori->id_kategori}}</td>
                            <td>{{$kategori->kategori}}</td>
                            <td>
                                <form action="{{ route('menukategori.destroy', $kategori->id_kategori) }}" method="POST" style="flex-direction: row;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <!-- Edit Button -->
                                    <a href="{{ route('menukategori.edit', $kategori->id_kategori) }}" class="btn btn-info">
                                        <span class="icon">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                    </a>
                                    <!-- Delete Button -->
                                    <button class="btn btn-danger" type="submit">
                                        <span class="icon">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>



{{--modal--}}

<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="tambahKategoriModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahKategoriModalModal">Tambah Kategori?</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Masukkan Data Kategori</p>
                <form action="{{route('menukategori.store')}}"" class="form-login text-center" method='POST'>
                    {{ csrf_field() }}
                    <input type="text" placeholder="Masukkan Nama Kategori" name="kategori" class="register-input input search-input input-group form-control border-0 search-input margin-bottom">
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