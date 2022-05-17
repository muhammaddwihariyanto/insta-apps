<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CobaController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $req)
    {

        $id = $req->id;
        $pwd = $req->password;

       if (Auth::attempt(['id' => $id, 'password' => $pwd])) {
            return redirect()->route('admindasbor');
        
        } else {
            return redirect()->route('pos')->with(['error' => 'Username / Password salah!']);
        }
    }

    public function registerview()
    {
       
        //dd($kpc);

        // $grup = DB::table('definisi_grup')
        //     ->where('jenis', '<>', 'teller')
        //     ->get();
        // $komunitas = DB::table('data_komunitas')
        //     ->get();

        return view('register', [
           
            // 'komunitas' => $komunitas,
        ]);
    }

    public function register(Request $request)
    {

       
        $nohape = $request->id;

       

        $messages = [
            'required' => ':attribute wajib diisi, tidak boleh kosong',
            'min' => ':attribute minimal :min karakter',
            'unique' => ':attribute sudah didaftarkan',
            'same' => ':attribute harus sama',
        ];

        $this->validate($request, [
            'name' => 'required|min:4',
            'id' => 'required|unique:users',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required|min:6',
            'confirmation' => 'required|same:password',
        ], $messages);

        DB::transaction(function () use ( $request) {

            $data = new User();
            $data->id = $request->id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->no_hp = $request->no_hp;



            $data->save();

            

            
        });

        return redirect('/pos')->with('alert-success', 'Kamu berhasil melakukan Registrasi Akun. ');
    }

    

    
   

    public function logout()
    {
        auth()->logout();
        return redirect('/pos');

    }

}
