@extends('base_user')
@section('content')
 	<div class="container-fluid">
            <div class="block-header">
                <h2>HOME USER</h2>
            </div>
            @if(Session::has('alert-success'))
            <br>
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TAKE YOUR MONEY HERE</div>
                            <a href="{{ url('transaction_take') }}" style="color: white;">Click here to add new Transaction!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">SHOW HISTORY TRANSACTION</div>
                            <a href="{{ url('transaction_history_user') }}" style="color: white;">Click here to show!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
   	</div>
@endsection