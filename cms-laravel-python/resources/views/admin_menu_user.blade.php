@extends('layouts.sidebar')
@section('content')
<div class="row">
    <h3 class="menu-title ml-3 mb-3">
        Menu User
    </h3>
</div>
<button class="btn btn-search login-input" data-target="#tambahUserModal" data-toggle="modal">
    Tambah User
</button>

<div class="col-md-12 col-lg-12 col-sm-12 mt-3">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>*******</td>
                        <td>-</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{--modal--}}
<div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="tambahUserModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahUserModalModal">Tambah User?</h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Masukkan Data User</p>
                <form action="{{ route('register') }}" method="POST" class="form-login text-center">
                    {{ csrf_field() }}

                    <input id="username" type="text" placeholder="Masukkan Username" name="username" class="register-input input search-input input-group form-control border-0 search-input margin-bottom" value="{{ old('username') }}" required autofocus>
                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" placeholder="Masukkan Password" name="password" class="register-input input search-input input-group  form-control border-0 search-input margin-bottom" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <input id="password-confirm" type="password" placeholder="Konfirmasi Password" name="password_confirmation" class="register-input input search-input input-group  form-control border-0 search-input margin-bottom" required>
                    <hr class="sidebar-divider">
                    <button type="submit" class="login-input btn btn-search input-group form-control border-0 search-input search-index">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection