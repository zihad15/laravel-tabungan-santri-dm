@extends('base_user')
@section('content')
<script type="text/javascript">
    function showResult() {
            var a1 = parseInt(saldoAwal.value);
            var a2 = parseInt(jumlah.value);
            var result = 0;
            if (a2 < 0) {
                alert("Tidak bisa memasukkan data < 0")
            }
            else {
            result = a1 + a2;
            saldoAkhir.value = result;
            }
        }
</script>
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM SAVING MONEY
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADD NEW TRANSACTION</h2>
                        </div>
                        <div class="body">
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                        @endif
                        @php
                        $nim=Session::get('nim');
                        $user=App\UserModel::where('nim','=',$nim)->get()->first();
                        @endphp
                            <form id="form_validation" method="POST" action="{{ route('transaction_index.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Nim</label>
                                        <input type="number" class="form-control" name="nim" id="nim" value="{{Session::get('nim')}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Session::get('name')}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Gender</label>
                                        <input type="text" class="form-control" name="gender" value="{{Session::get('gender')}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Kelas</label>
                                        <input type="number" class="form-control" name="kelas" id="kelas" value="{{Session::get('tahunAjaranMasuk')}}"  readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Saat Ini</label>
                                        <input type="number" class="form-control" name="saldoAwal" id="saldoAwal" value="{{$user->saldo}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jenis Transaksi</label>
                                        <input type="text" class="form-control" name="jenisTransaksi" value="Saving" readonly>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Jumlah (Tekan "Tab" untuk menampilkan Saldo Akhir)</label>
                                        <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah yang ingin ditabungkan" onchange="showResult()" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label>Saldo Akhir</label>
                                        <input type="number" class="form-control" name="saldoAkhir" id="saldoAkhir" readonly>
                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">MAKE TRANSACTION</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
@endsection