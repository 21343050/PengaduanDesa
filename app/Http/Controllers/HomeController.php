<?php

namespace App\Http\Controllers;
use App\Models\Pengaduan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View {
        $pengaduans = Pengaduan::latest()->paginate(5);
        return view('home', compact('pengaduans'));

        return view('home');
    }

    public function destroy($id):RedirectResponse {
        $pengaduan = Pengaduan::findOrFail($id);
        
        //delete pengaduan
        $pengaduan->delete();

        //redirect to index
        return redirect()->route('home.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}