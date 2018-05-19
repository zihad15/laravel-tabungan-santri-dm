@extends('base_admin')
@section('content')


<!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                USER DATA (PUTRA)
                            </h2>
                            @if(Session::has('alert-success'))
                            <br>
                              <div class="alert alert-success">
                                <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                              </div>
                            @endif
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{ url('user_add') }}">Add User</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


<script type="text/javascript">

            $('title').html('User');

            
            function user_register(user_id, user_name) {
                
                $('body').ajaxMask();
            
                regStats = 0;
                regCt = -1;
                try
                {
                    timer_register.stop();
                }
                catch(err)  
                {
                    console.log('Registration timer has been init');
                }
                
                
                var limit = 4;
                var ct = 1;
                var timeout = 5000;
                
                timer_register = $.timer(timeout, function() {                  
                    console.log("'"+user_name+"' registration checking...");
                    user_checkregister(user_id,$("#user_finger_"+user_id).html());
                    if (ct>=limit || regStats==1) 
                    {
                        timer_register.stop();
                        console.log("'"+user_name+"' registration checking end");
                        if (ct>=limit && regStats==0)
                        {
                            alert("'"+user_name+"' registration fail!");
                            $('body').ajaxMask({ stop: true });
                        }                       
                        if (regStats==1)
                        {
                            $("#user_finger_"+user_id).html(regCt);
                            alert("'"+user_name+"' registration success!");
                            $('body').ajaxMask({ stop: true });
                            load('user-add-fingerprint');
                        }
                    }
                    ct++;
                });
            }
            
            function user_checkregister(user_id, current) {
                $.ajax({
                    type        :   "GET",
                    success     :   function(data)
                                    {
                                        try
                                        {
                                            var res = jQuery.parseJSON(data);   
                                            if (res.result)
                                            {
                                                regStats = 1;
                                                $.each(res, function(key, value){
                                                    if (key=='current')
                                                    {                                                       
                                                        regCt = value;
                                                    }
                                                });
                                            }
                                        }
                                        catch(err)
                                        {
                                            alert(err.message);
                                        }
                                    }
                });
            }

        </script>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" width="2000px">
                                    <thead>
                                        <tr>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tahun Masuk</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Nama Ortu</th>
                                            <th>No Telp</th>
                                            <th>Saldo</th>
                                            <th>Status</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                            <th> </th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nim</th>
                                            <th>Nama</th>
                                            <th>Gender</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tahun Masuk</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Nama Ortu</th>
                                            <th>No Telp</th>
                                            <th>Saldo</th>
                                            <th>Status</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                            <th> </th>
                                            <th> </th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($datas1 as $data)
                                        <tr>
                                            <td>{{ $data->nim }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->tempatLahir }}</td>
                                            <td>{{ $data->tanggalLahir }}</td>
                                            <td>{{ $data->tahunAjaranMasuk }}</td>
                                            <td>{{ 2018 - $data->tahunAjaranMasuk }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->namaOrtu }}</td>
                                            <td>{{ $data->noTelp }}</td>
                                            <td>{{ $data->saldo }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('user_manage.destroy', $data->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <a href="{{ route('user_manage.edit',$data->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                                    <a href='http://localhost/sidik/' class='btn btn-xs btn-primary'>Register</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('transaction-save-via-admin', $data->nim) }}" class="btn btn-sm btn-success">Saving</a>
                                                <a href="{{ url('transaction_history_admin', $data->nim) }}" class="btn btn-sm btn-primary">Transaction History</a>
                                            </td>
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