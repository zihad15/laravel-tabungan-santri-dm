@extends('base_admin')
@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM EDIT USER
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>EDIT DATA USER</h2>
                        </div>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                            </ul>
                          </div>
                        @endif
                        <div class="body">
                            <form id="form_validation" method="POST" action="{{ route('user_manage.update', $data->id) }}" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="">Nim</label>
                                        <input type="number" class="form-control" name="nim" value="{{ $data->nim }}" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="Putra" class="with-gap" value="Putra">
                                    <label for="Putra">Putra</label>

                                    <input type="radio" name="gender" id="Putri" class="with-gap" value="Putri">
                                    <label for="Putri" class="m-l-20">Putri</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempatLahir" value="{{ $data->tempatLahir }}">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="tanggalLahir" value="{{ $data->tanggalLahir }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="form-line">
                                    <select class="" name="tahunAjaranMasuk" id="tahunAjaranMasuk">
                                      <option value="{{ $data->tahunAjaranMasuk }}">{{ $data->tahunAjaranMasuk }}</option>
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
                                    <label class="">Alamat</label>
                                    <textarea id="address" name="address" class="form-control no-resize">{{ $data->address }}</textarea>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="">Nama Orang Tua ( Ayah / Ibu )</label>
                                        <input type="text" name="namaOrtu" class="form-control" value="{{ $data->namaOrtu }}"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <label class="">No Telp</label>
                                        <input type="number" class="form-control" name="noTelp" value="{{ $data->noTelp }}">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <label class="">Saldo</label>
                                    <input type="number" class="form-control" name="saldo" value="{{ $data->saldo }}" readonly>
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <label class="">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{ $data->username }}">
                                  </div>
                                </div>
                                <div class="form-group form-float">
                                  <div class="form-line">
                                    <label class="">Pin</label>
                                    <input type="password" class="form-control" name="pin" value="{{ $data->pin }}">
                                  </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="status" id="Aktif" class="with-gap" value="Aktif">
                                    <label for="Aktif">Aktif</label>

                                    <input type="radio" name="status" id="Tidak Aktif" class="with-gap" value="Tidak Aktif">
                                    <label for="Tidak Aktif" class="m-l-20">Tidak Aktif</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                <a href="{{ url('user_manage') }}" class="btn btn-danger waves-effect" type="button">CANCEL</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
@endsection