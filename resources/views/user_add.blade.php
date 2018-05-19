@extends('base_admin')
@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM ADD USER
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ADD NEW USER</h2>
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
                            <form id="form_validation" method="POST" action="{{ route('user_manage.store') }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="nim" required>
                                        <label class="form-label">Nim</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="Male" class="with-gap" value="Male">
                                    <label for="Male">Male</label>

                                    <input type="radio" name="gender" id="Female" class="with-gap" value="Female">
                                    <label for="Female" class="m-l-20">Female</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tempatLahir" required>
                                        <label class="form-label">Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tanggalLahir" required>
                                        <label class="form-label"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="form-line">
                                    <select class="" name="tahunAjaranMasuk" id="tahunAjaranMasuk">
                                      <option value="">-- Tahun Ajaran Masuk --</option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                      <option value="2013">2013</option>
                                      <option value="2014">2014</option>
                                      <option value="2015">2015</option>
                                      <option value="2016">2016</option>
                                      <option value="2017">2017</option>
                                      <option value="2018">2018</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <textarea id="address" name="address" class="form-control no-resize" required=""></textarea>
                                    <label class="form-label">Alamat</label>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="namaOrtu" class="form-control" required></textarea>
                                        <label class="form-label">Nama Orang Tua ( Ayah / Ibu )</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="noTelp" required>
                                        <label class="form-label">No Telp</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="number" class="form-control" name="saldo" required>
                                    <label class="form-label">Saldo</label>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="text" class="form-control" name="username" required>
                                    <label class="form-label">Username</label>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <input type="password" class="form-control" name="pin" required>
                                    <label class="form-label">Pin</label>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="status" id="Aktif" class="with-gap" value="Aktif" value="1">
                                    <label for="Aktif">Aktif</label>

                                    <input type="radio" name="status" id="Tidak Aktif" class="with-gap" value="Tidak Aktif">
                                    <label for="Tidak Aktif" class="m-l-20">Tidak Aktif</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
@endsection