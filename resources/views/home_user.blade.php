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
                    <div class="info-box bg-brown">
                        <div class="icon">
                            <h1>1</h1>
                        </div>
                        <div class="content">
                            <h1>Rp. 5.000</h1>
                            <a style="color: white;" id="myBtn" onclick="showResult()">Press number 1!</a>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                              <!-- Modal content -->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2>Form Withdrawal Transaction</h2>
                                </div>
                                <div class="modal-body">
                        @php
                        $nim=Session::get('nim');
                        $user=App\UserModel::where('nim','=',$nim)->get()->first();
                        @endphp
                            <form id="form" method="POST" action="{{ route('transaction_index.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <input type="hidden" class="form-control" name="nim" id="nim" value="{{Session::get('nim')}}" readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Session::get('name')}}" readonly>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="gender" value="{{Session::get('gender')}}" readonly>

                                <input type="hidden" class="form-control" name="kelas" id="kelas" value="{{Session::get('tahunAjaranMasuk')}}"readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Saat Ini</label>
                                        <input type="number" class="form-control" name="saldoAwal" id="saldoAwal" value="{{$user->saldo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jenis Transaksi</label>
                                        <input type="text" class="form-control" name="jenisTransaksi" value="Withdrawal" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                        <label>Jumlah Pengambilan</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" value="5000" readonly>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Akhir</label>
                                        <input type="number" class="form-control" name="saldoAkhir" id="saldoAkhir" readonly>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary waves-effect" name="btnSubmit" id="btnSubmit" value="MAKE TRANSACTION">
                                <p style="float: right;">Sudah benar? (Tekan ENTER jika benar dan tekan 0 jika salah!)</p>
                            </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink">
                        <div class="icon">
                            <h1>2</h1>
                        </div>
                        <div class="content">
                            <h1>Rp. 10.000</h1>
                            <a style="color: white;" id="myBtn2" onclick="showResult2()">Press number 2!</a>
                            <!-- The Modal -->
                            <div id="myModal2" class="modal">
                              <!-- Modal content -->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2>Form Withdrawal Transaction</h2>
                                </div>
                                <div class="modal-body">
                        @php
                        $nim=Session::get('nim');
                        $user=App\UserModel::where('nim','=',$nim)->get()->first();
                        @endphp
                            <form id="form2" method="POST" action="{{ route('transaction_index.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <input type="hidden" class="form-control" name="nim" id="nim" value="{{Session::get('nim')}}" readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Session::get('name')}}" readonly>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="gender" value="{{Session::get('gender')}}" readonly>

                                <input type="hidden" class="form-control" name="kelas" id="kelas" value="{{Session::get('tahunAjaranMasuk')}}"readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Saat Ini</label>
                                        <input type="number" class="form-control" name="saldoAwal" id="saldoAwal2" value="{{$user->saldo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jenis Transaksi</label>
                                        <input type="text" class="form-control" name="jenisTransaksi" value="Withdrawal" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                        <label>Jumlah Pengambilan</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah2" value="10000" readonly>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Akhir</label>
                                        <input type="number" class="form-control" name="saldoAkhir" id="saldoAkhir2" readonly>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary waves-effect" name="btnSubmit2" id="btnSubmit2" value="MAKE TRANSACTION">
                                <p style="float: right;">Sudah benar? (Tekan ENTER jika benar dan tekan 0 jika salah!)</p>
                            </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green">
                        <div class="icon">
                            <h1>3</h1>
                        </div>
                        <div class="content">
                            <h1>Rp. 20.000</h1>
                            <a style="color: white;" id="myBtn3" onclick="showResult3()">Press number 3!</a>
                            <!-- The Modal -->
                            <div id="myModal3" class="modal">
                              <!-- Modal content -->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2>Form Withdrawal Transaction</h2>
                                </div>
                                <div class="modal-body">
                        @php
                        $nim=Session::get('nim');
                        $user=App\UserModel::where('nim','=',$nim)->get()->first();
                        @endphp
                            <form id="form3" method="POST" action="{{ route('transaction_index.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <input type="hidden" class="form-control" name="nim" id="nim" value="{{Session::get('nim')}}" readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Session::get('name')}}" readonly>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="gender" value="{{Session::get('gender')}}" readonly>

                                <input type="hidden" class="form-control" name="kelas" id="kelas" value="{{Session::get('tahunAjaranMasuk')}}"readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Saat Ini</label>
                                        <input type="number" class="form-control" name="saldoAwal" id="saldoAwal3" value="{{$user->saldo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jenis Transaksi</label>
                                        <input type="text" class="form-control" name="jenisTransaksi" value="Withdrawal" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                        <label>Jumlah Pengambilan</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah3" value="20000" readonly>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Akhir</label>
                                        <input type="number" class="form-control" name="saldoAkhir" id="saldoAkhir3" readonly>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary waves-effect" name="btnSubmit3" id="btnSubmit3" value="MAKE TRANSACTION">
                                <p style="float: right;">Sudah benar? (Tekan ENTER jika benar dan tekan 0 jika salah!)</p>
                            </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue">
                        <div class="icon">
                            <h1>4</h1>
                        </div>
                        <div class="content">
                            <h1>Rp. 50.000</h1>
                            <a style="color: white;" id="myBtn4" onclick="showResult4()">Press number 4!</a>
                            <!-- The Modal -->
                            <div id="myModal4" class="modal">
                              <!-- Modal content -->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h2>Form Withdrawal Transaction</h2>
                                </div>
                                <div class="modal-body">
                        @php
                        $nim=Session::get('nim');
                        $user=App\UserModel::where('nim','=',$nim)->get()->first();
                        @endphp
                            <form id="form4" method="POST" action="{{ route('transaction_index.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <input type="hidden" class="form-control" name="nim" id="nim" value="{{Session::get('nim')}}" readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Session::get('name')}}" readonly>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="gender" value="{{Session::get('gender')}}" readonly>

                                <input type="hidden" class="form-control" name="kelas" id="kelas" value="{{Session::get('tahunAjaranMasuk')}}"readonly>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Saat Ini</label>
                                        <input type="number" class="form-control" name="saldoAwal" id="saldoAwal4" value="{{$user->saldo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jenis Transaksi</label>
                                        <input type="text" class="form-control" name="jenisTransaksi" value="Withdrawal" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                        <label>Jumlah Pengambilan</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah4" value="50000" readonly>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Akhir</label>
                                        <input type="number" class="form-control" name="saldoAkhir" id="saldoAkhir4" readonly>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary waves-effect" name="btnSubmit4" id="btnSubmit4" value="MAKE TRANSACTION">
                                <p style="float: right;">Sudah benar? (Tekan ENTER jika benar dan tekan 0 jika salah!)</p>
                            </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue">
                        <div class="content">
                            <h1>Saldo : {{Session::get('saldo')}}</h1>
                    </div>
                </div>
            </div>
            <h2>10 TRANSAKSI TERAKHIR</h2>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>Saldo Awal</th>
                                <th>Jenis Transaksi</th>
                                <th>Jumlah</th>
                                <th>Saldo Akhir</th>
                                <th>Waktu & Tanggal</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Kelas</th>
                                <th>Saldo Awal</th>
                                <th>Jenis Transaksi</th>
                                <th>Jumlah</th>
                                <th>Saldo Akhir</th>
                                <th>Waktu & Tanggal</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($datas5 as $data)
                            <tr>
                                <td>{{ $data->nim }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->gender }}</td>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->saldoAwal }}</td>
                                <td>{{ $data->jenisTransaksi }}</td>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->saldoAkhir }}</td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- #END# Widgets -->
   	</div>
@endsection