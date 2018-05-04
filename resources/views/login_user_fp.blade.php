@extends('login_base')
@section('content')
    <div class="login-box">
        <div class="logo">
            <a>Login User</a>
            <small>Please login first to enter into User area.</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ url('loginPostUserFp') }}">
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
                            <input type="text" class="form-control" name="username" placeholder="Username" required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <a href="{{ url('login-user') }}" style="color: blue;">Login with Pin</a>
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