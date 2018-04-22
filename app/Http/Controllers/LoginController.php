<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\AdminModel;
use App\UserModel;
use Auth;
class LoginController extends Controller
{
    // ADMIN
    public function indexAdmin(){
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('home_admin');
        }
    }

    public function loginAdmin(){
        return view('login_admin');
    }

    public function loginPostAdmin(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = AdminModel::where('username',$username)->first();
        if($data != null){ //apakah username tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
            	Session::put('file',$data->file);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('loginAdmin',TRUE);
                return redirect('home_admin');
            }
            else{
                return redirect('login_admin')->with('alert','Username atau Password, Salah !'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('login_admin')->with('alert','Username atau Password, Salah!');
        }
    }

    public function logoutAdmin(){
        Session::flush();
        return redirect('login_admin')->with('alert','Kamu sudah logout');
    }

    public function registerAdmin(Request $request){
        return view('register_admin');
    }

    public function registerPostAdmin(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:admin',
            'password' => 'required',
            'repassword' => 'required|same:password',
            'username' => 'required|min:4',
        ]);
        $data =  new AdminModel();
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('assets/images/files',$newName);
        $data->file = $newName;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login_admin')->with('alert-success','Kamu berhasil Register');
    }


    // USER
    public function indexUser(){
        if(!Session::get('loginUser')){
            return redirect('login_user')->with('alert','Kamu harus login dulu');
        }
        else{
            
            return view('home_user');
        }
    }


    public function loginUser(){
        return view('login_user');
    }

    public function loginPostUser(Request $request){
        $username = $request->username;
        $pin = $request->pin;
        $data = UserModel::where('username',$username)->first();
        if($data != null){ //apakah username tersebut ada atau tidak
            if(Hash::check($pin,$data->pin)){
                Session::put('nim',$data->nim);
                Session::put('name',$data->name);
                Session::put('gender',$data->gender);
                Session::put('tahunAjaranMasuk',2018 - $data->tahunAjaranMasuk);
                Session::put('saldo',$data->saldo);
                Session::put('loginUser',TRUE);
                return redirect('home_user');
            }
            else{
                return redirect()->back()->with('alert','Username atau Pin, Salah !'.Hash::check($pin,$data->pin));
            }
        }
        else{
            return redirect()->back()->with('alert','Username atau Pin, Salah !');
        }
    }

    public function logoutUser(){
        Session::flush();
        return redirect('login_user')->with('alert','Kamu sudah logout');
    }
}
