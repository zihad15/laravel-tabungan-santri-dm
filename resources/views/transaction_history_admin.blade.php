@extends('base_admin')
@section('content')
<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                HISTORY TRANSACTION FROM : {{ $datas6->name }}
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
@endsection