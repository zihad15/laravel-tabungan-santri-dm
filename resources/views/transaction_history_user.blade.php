@extends('base_user')
@section('content')
<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HISTORY TRANSACTION FROM : {{ Session::get('name') }}
                            </h2>
                        </div>
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
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
@endsection