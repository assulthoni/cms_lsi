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
        <form action="{{route('menuuser.update', $user->id)}}" enctype="multipart/form-data" class="form-login" method='POST'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label for="username">Masukkan Username</label>
            <input id="username" value="{{$user->username}}"type="text" placeholder="Masukkan Username" name="username" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" value="{{ old('username') }}" required autofocus>
            
            <br>
            <label for="password">Masukkan Password (jika ingin ganti password)</label>
            <input id="password" type="password" placeholder="Masukkan Password Baru" name="password" class="register-input input search-input input-group  form-control border-0 search-input margin-bottom">
            <input id="password-confirm" type="password" placeholder="Konfirmasi Password Baru" name="password_confirmation" class="register-input input search-input input-group  form-control border-0 search-input margin-bottom">
            
            <hr class="sidebar-divider">
            <button type="submit" class="login-input btn btn-search input-group form-control border-0 search-input search-index">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection