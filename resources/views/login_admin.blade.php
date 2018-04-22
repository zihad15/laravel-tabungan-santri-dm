@extends('login_base')
@section('content')
    <div class="login-box">
        <div class="logo">
            <a>Login Administrator</a>
            <small>Please login first to enter into Administrator area.</small>
            <small>Don't have any account? contact Developer @ 083898666767</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ url('/loginPostAdmin') }}">
                  {{ csrf_field() }}
                    <div class="msg">                 
                    @if(\Session::has('alert'))
                      <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                      </div>
                    @endif
                    @if(\Session::has('alert-success'))
                      <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                      </div>
                    @endif
                    Have a nice day!
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block btn-success waves-effect" type="submit">SIGN IN</button>
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