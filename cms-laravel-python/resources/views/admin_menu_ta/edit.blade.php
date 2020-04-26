@extends('layouts.sidebar')
@section('content')
<div class="card container p-5" style="width: 80%">
    <div class="col-md-12">
        <h5 class="modal-title" id="tambahPoin">Edit Kategori</h5>
    </div>
    <hr class="sidebar-divider">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('menuta.update', $tugas_akhir->id_ta)}}" enctype="multipart/form-data" class="form-login" method='POST'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="judul">Masukkan Judul</label>
            <input type="text" placeholder="Masukkan Judul" value="{{$tugas_akhir->judul}}"name="judul" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

            <label for="tahun">Masukkan Tahun</label>
            <input type="number" placeholder="Masukkan Tahun" value="{{$tugas_akhir->tahun}}" id="tahun" name="tahun" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

            <label for="penulis">Masukkan Penulis</label>
            <input type="text" placeholder="Masukkan Penulis" value="{{$tugas_akhir->penulis}}" name="penulis" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>

            <label for="id_pembimbing">Pilih Pembimbing</label>
            <select name="id_pembimbing" id="id_pembimbing" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                <option value="" disabled>
                    Pilih Pembimbing
                </option>
                @foreach($pembimbings as $pembimbing)
                <option value="{{$pembimbing->id_pembimbing}}" {{ $pembimbing->id_pembimbing == $tugas_akhir->id_pembimbing ? 'selected' : '' }}>
                    {{$pembimbing->nama_pembimbing}}
                </option>
                @endforeach
            </select>

            <label for="id_kategori">Pilih Kategori</label>
            <select name="id_kategori" id="id_kategori" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                <option value="" disabled>
                    Pilih Kategori
                </option>
                @foreach($kategoris as $kategori)
                <option value="{{$kategori->id_kategori}}" {{$kategori->id_kategori == $kategori_ta->id_kategori ? 'selected' : '' }}>
                    {{$kategori->kategori}}
                </option>
                @endforeach
            </select>

            <label for="id_prodi">Pilih Program Studi</label>
            <select name="id_prodi" id="id_prodi" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" required>
                <option value="" disabled>
                    Pilih Program Studi
                </option>
                @foreach($program_studi as $ps)
                <option value="{{$ps->id_prodi}}" {{$ps->id_prodi == $tugas_akhir->id_prodi ? 'selected' : '' }}>
                    {{$ps->nama_prodi}}
                </option>
                @endforeach
            </select>

            <label for="abstract">Masukkan Abstract</label>
            <textarea name="abstract" id="" cols="30" rows="10" class="register-input search-input input-group form-control border-0 search-input margin-bottom" required>{{$tugas_akhir->abstract}}</textarea>
            <br>
            <label for="nama_file">Masukkan File (jika ingin ganti file)</label>
            <input type="file" placeholder="Masukkan File (jika ingin ganti file)" id="nama_file" name="nama_file" class="register-input input search-input input-group form-control border-0 search-input margin-bottom">
            <hr class="sidebar-divider">
            <button type="submit" class="login-input btn btn-search input-group form-control border-0 search-input search-index">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection