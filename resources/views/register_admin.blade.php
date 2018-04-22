@extends('login_base')
@section('content')
    <div class="login-box">
        <div class="logo">
            <a>Register Administrator</a>
            <small>Here you can register your self as Administrator.</small>
            <small>Aplikasi Tabungan Santri (Register as Administrator)</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ url('/registerPostAdmin') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="msg">                 
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    Have a nice day!
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <label class="">Image</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name">
                            <label class="form-label">Name</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email">
                            <label class="form-label">Email</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="username">
                            <label class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password">
                            <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="repassword">
                            <label class="form-label">Repassword</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-success waves-effect" type="submit">REGISTER!</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            
                        </div>
                        <div class="col-xs-6 align-right">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection