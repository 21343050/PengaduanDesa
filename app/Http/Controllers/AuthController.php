<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function index(): View {
        $pengaduans = Pengaduan::latest()->paginate(5);
        return view('welcome', compact('pengaduans'));
        return view('welcome');
    }

    // public function store(Request $request): RedirectResponse {
    //     $this->validate($request, [
    //         'nama'     => 'required|min:70',
    //         'email'     => 'required|min:50',
    //         'nohp'   => 'required|min:13',
    //         'aduan' => 'required'
    //     ]);
    //     //create post
    //     Pengaduan::index([
    //         'nama'     => $request->nama,
    //         'email'   => $request->email,
    //         'nohp'   => $request->nohp,
    //         'aduan'   => $request->aduan
    //     ]);

    //     //redirect to index
    //     return redirect()->route('welcome.index')->with(['success' => 'Data Berhasil Disimpan!']);
    // }

    public function kirimData(Request $request) {
        $pengaduan = new Pengaduan();

        $pengaduan->nama = $request-> nama;
        $pengaduan->email = $request-> email;
        $pengaduan->nohp = $request-> nohp;
        $pengaduan->aduan = $request-> aduan;

        $pengaduan->save();

        return redirect()->route('welcome');
    }
    
    public function register()
    {
        return view("register");
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'register succesfully');
        // dd($request->all());
    }

    public function login()
    {
        return view("login");
    }

    public function loginPost(Request $request) {
        $sesiLog = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($sesiLog)) {
            return redirect('/home')->with('succes', 'Login berhasil');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}