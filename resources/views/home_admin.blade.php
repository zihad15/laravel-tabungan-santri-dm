@extends('base_admin')
@section('content')
 	<div class="container-fluid">
            <div class="block-header">
                <h2>HOME ADMIN</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ADD NEW USER</div>
                            <a href="{{ url('user_add') }}" style="color: white;">Click here to add!</a>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">TRANSACTION DATA (PUTRA)</div>
                            <a href="{{ url('transaction_data_putra') }}" style="color: white;">Click here to show!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">TRANSACTION DATA (PUTRI)</div>
                            <a href="{{ url('transaction_data_putri') }}" style="color: white;">Click here to show!</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
   	</div>
@endsection