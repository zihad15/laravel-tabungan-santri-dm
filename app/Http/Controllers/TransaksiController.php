<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\TransaksiModel;
use App\UserModel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTransaksiPutra()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas1 = TransaksiModel::where('gender', 'Putra')->orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_data_putra',compact('datas1'));
        }
    }

    public function indexTransaksiReportPutra()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas3 = TransaksiModel::where('gender', 'Putra')->get();
            return view('transaction_report_putra',compact('datas3'));
        }
    }

    public function indexTransaksiPutri()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas2 = TransaksiModel::where('gender', 'Putri')->orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_data_putri',compact('datas2'));
        }
    }

    public function indexTransaksiReportPutri()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas4 = TransaksiModel::where('gender', 'Putri')->get();
            return view('transaction_report_putri',compact('datas4'));
        }
    }

    public function indexTransaksiHistoryUser()
    {
        if(!Session::get('loginUser')){
            return redirect('login_user')->with('alert','Kamu harus login dulu');
        }
        else{
            $nim=Session::get('nim');
            $datas5 = TransaksiModel::where('nim','=',$nim)->orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_history_user',compact('datas5'));
        }
    }

    public function userGetHistoryTransaction($nim)
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{

            $datas6 = TransaksiModel::where('nim', $nim)->orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_history_admin',compact('datas6'));
        }
    }

    public function takingViaAdmin($nim)
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{

            $datas7 = UserModel::where('nim', $nim)->get()->first();
            return view('transaction_save',compact('datas7'));
        }
    }

    public function indexTransaksiAll()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas8 = TransaksiModel::orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_data_all',compact('datas8'));
        }
    }

    public function indexTransaksiReportAll()
    {
        if(!Session::get('loginAdmin')){
            return redirect('login_admin')->with('alert','Kamu harus login dulu');
        }
        else{
            $datas9 = TransaksiModel::orderBy('created_at', 'DESC/ASC')->get();
            return view('transaction_report_all',compact('datas9'));
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSaving()
    {
        if(!Session::get('loginUser')){
            return redirect('login_user')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('transaction_save');
        }
    }

    public function createTaking()
    {
        if(!Session::get('loginUser')){
            return redirect('login_user')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('transaction_take');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas =  new TransaksiModel();
        $datas->nim = $request->nim;
        $datas->name = $request->name;
        $datas->gender = $request->gender;  
        $datas->kelas = $request->kelas;
        $datas->saldoAwal = $request->saldoAwal;
        if ($request->saldoAkhir > $request->saldoAwal) {
            $datas->jenisTransaksi = $request->value="Saving";
        }
        else {
            $datas->jenisTransaksi = $request->value="Taking";
        }
        $datas->jumlah = $request->jumlah;
        $datas->saldoAkhir = $request->saldoAkhir;
        $datas->save();

        $nim=$datas->nim;
        $updatesaldo=UserModel::where('nim','=',$nim)->get()->first();
        if ($request->saldoAkhir > $request->saldoAwal) {
            $updatesaldo->saldo=$updatesaldo->saldo + $request->jumlah;
        }
        else if ($request->saldoAkhir < $request->saldoAwal){
            $updatesaldo->saldo=$updatesaldo->saldo - $request->jumlah;
        }
        
        $updatesaldo->save();

        if ($datas->jenisTransaksi == "Saving") {
            return redirect('home_admin')->with('alert-success','Saving Transaction successfully done!');
        }
        else
        {
            return redirect('home_user')->with('alert-success','Taking Transaction successfully done!');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
