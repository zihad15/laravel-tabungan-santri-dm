<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\UserModel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //     if(!Session::get('loginAdmin')){
    //         return redirect('login_admin')->with('alert','Kamu harus login dulu');
    //     }
    //     else{
    //         $datas = UserModel::orderBy('id', 'DESC/ASC')->get();
    //         return view('user_manage',compact('datas'));
    //     }
    // }

    public function dataPutra()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas1 = UserModel::where('gender', 'Putra')->get();
            return view('user_data_putra',compact('datas1'));
        }
    }

    public function dataPutri()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas2 = UserModel::where('gender', 'Putri')->get();
            return view('user_data_putri',compact('datas2'));
        }
    }

    public function userAdd()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user_add');
        }
    }

    public function userGetUsername($id)
    {
        $datas4 = UserModel::findOrFail($id);
        return view('login_user_putra',compact('datas4'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required|min:4',
            'name' => 'required|min:4',
            'gender' => 'required',
            'tempatLahir' => 'required|min:4',
            'tanggalLahir' => 'required',
            'tahunAjaranMasuk' => 'required',
            'address' => 'required|min:4',
            'namaOrtu' => 'required',
            'noTelp' => 'required|min:10',
            'saldo' => 'required',
            'username' => 'required',
            'pin' => 'required|min:4',
        ]);
        $datas =  new UserModel();
        $datas->nim = $request->nim;
        $datas->name = $request->name;
        $datas->gender = $request->gender;
        $datas->tempatLahir = $request->tempatLahir;
        $datas->tanggalLahir = $request->tanggalLahir;
        $datas->tahunAjaranMasuk = $request->tahunAjaranMasuk;
        $datas->address = $request->address;
        $datas->namaOrtu = $request->namaOrtu;
        $datas->noTelp = $request->noTelp;
        $datas->saldo = $request->saldo;
        $datas->username = $request->username;
        $datas->pin = bcrypt($request->pin);
        $datas->status = $request->status;
        $datas->save();
        if ($datas->gender == "Putra") {
            return redirect('user_data_putra')->with('alert-success','Data user berhasil ditambahkan!');
        }
        else
        {
            return redirect('user_data_putri')->with('alert-success','Data user berhasil ditambahkan!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = UserModel::findOrFail($id);

        return view('user_edit',compact('data'));
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nim' => 'required|min:4',
            'name' => 'required|min:4',
            'gender' => 'required',
            'tempatLahir' => 'required|min:4',
            'tanggalLahir' => 'required',
            'tahunAjaranMasuk' => 'required',
            'address' => 'required|min:4',
            'namaOrtu' => 'required',
            'noTelp' => 'required|min:10',
            'saldo' => 'required',
            'username' => 'required',
            'pin' => 'required|min:4',
            'status' => 'required'
        ]);
        $datas = UserModel::findOrFail($id);
        $datas->nim = $request->input('nim');
        $datas->name = $request->input('name');
        $datas->gender = $request->input('gender');
        $datas->tempatLahir = $request->input('tempatLahir');
        $datas->tanggalLahir = $request->input('tanggalLahir');
        $datas->tahunAjaranMasuk = $request->input('tahunAjaranMasuk');
        $datas->address = $request->input('address');
        $datas->namaOrtu = $request->input('namaOrtu');
        $datas->noTelp = $request->input('noTelp');
        $datas->saldo = $request->input('saldo');
        $datas->username = $request->input('username');
        $datas->pin = $request->input('pin');
        $datas->pin = bcrypt($request->pin);
        $datas->status = $request->input('status');
        $datas->save();
        if ($datas->gender == "Putra") {
            return redirect('user_data_putra')->with('alert-success','Data user berhasil ditambahkan!');
        }
        else
        {
            return redirect('user_data_putri')->with('alert-success','Data user berhasil ditambahkan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $data = UserModel::where('id',$id)->first();
        // $data->delete();
        // return redirect()->route('user_manage.index')->with('alert-success','Data berhasil dihapus!');
    }
}
