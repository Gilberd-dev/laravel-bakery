<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Masukan;
use App\Models\Prestasi;
use App\Models\Carousell;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function editsekarang($id)
    {
        $data = Carousell::find($id);
        return view('admin.edit_promosi' , compact('data'));
    }

    public function updatepromosi(Request $request , $id)
    {

        $admin = Carousell::find($id);
        if ($admin) {
            $admin->judul_carousel = $request->input('judul_carousel');
            $admin->deskripsi_carousel = $request->input('deskripsi_carousel');
    
            if ($request->hasFile('gambar_carousel')) {
                if ($admin->gambar_carousel) {
                    $previousFilePath = 'Pict/' . $admin->gambar_carousel;
                    if (file_exists($previousFilePath)) {
                        unlink($previousFilePath);
                    }
                }
            
                $foto_admin = $request->file('gambar_carousel');
                $foto_path = $foto_admin->move('Pict', $foto_admin->getClientOriginalName());
                $admin->gambar_carousel = $foto_path->getFilename();
            }

            $admin->save();
        return redirect('promosi');
    }
}


    public function hapusPromosi($id)
{
    $data = Carousell::all();
    $promosi = Carousell::findOrFail($id);
    $promosi->delete();
    return redirect()->route('promosi')->with('success','Data berhasil di update');
    // return redirect()->back()->with('success', 'Data produk berhasil dihapus');
}
    public function add_serti(Request $request){
        $validator = Validator::make($request->all(), [
            'judul_sertifikat' => 'required|string|max:255',
            'deskripsi_sertifikat' => 'required|string|max:255',
            'lambang_sertifikat' => 'required|file|mimetypes:image/jpeg,image/jpg,image/png',

        ]);
        if ($validator->fails()) {
            return redirect()->route('sertifikat')->with('error','Isi Pendapat Anda Dengan Benar');
        }

        $data = Sertifikat::create($request->all());
        if ($request->hasFile('lambang_sertifikat')) {
            $request->file('lambang_sertifikat')->move('Pict/', $request->file('lambang_sertifikat')->getClientOriginalName());
            $data->lambang_sertifikat = $request->file('lambang_sertifikat')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('sertifikat')->with('success','Data berhasil di update');
    }

    public function  tambah_serti(){
        $data = Sertifikat::all();
        return view('admin/tambah_serti',compact('data'),[
            "title" => "Sertifikat"
        ]);
    }

    public function add_pres(Request $request){
        $validator = Validator::make($request->all(), [
            'judul_prestasi' => 'required|string|max:255',
            'deskripsi_prestasi' => 'required|string|max:255',
            'gambar_prestasi' => 'required|file|mimetypes:image/jpeg,image/jpg,image/png',

        ]);
        if ($validator->fails()) {
            return redirect()->route('prestasi')->with('error','Isi Pendapat Anda Dengan Benar');
        }

        $data = Prestasi::create($request->all());
        if ($request->hasFile('gambar_prestasi')) {
            $request->file('gambar_prestasi')->move('Pict/', $request->file('gambar_prestasi')->getClientOriginalName());
            $data->gambar_prestasi = $request->file('gambar_prestasi')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('prestasi')->with('success','Data berhasil di update');
    }

    public function tambah_pres(){
        $data = Prestasi::all();
        return view('admin/tambah_prestasi',compact('data'),[
            "title" => "Prestasi"
        ]);
    }

    public function prestasi(){
        $data = Prestasi::all();
        // dd($prestasis);
        return view('admin/prestasi', compact('data'), [
            "title" => "Prestasi"
        ]);
    }

    public function edit_promosi($id){
        $data = Carousell::all();
        $promosi = Carousell::find($id);
        return view('admin/edit_promosi',compact('data','promosi'),[
            "title" => "Promosi"
        ]);
    }

    public function edit_profile(Request $request,$id){

        $request->validate([
            'nama_admin' => 'required|string|max:255',
            'nomor_telepon_admin' => 'required|string|max:255',
            'foto_admin' => 'nullable|file|mimetypes:image/jpeg,image/jpg,image/png',
        ]);
    
    
        $admin = Admin::find($id);
        if ($admin) {
            $admin->nama_admin = $request->input('nama_admin');
            $admin->nomor_telepon_admin = $request->input('nomor_telepon_admin');
    
            if ($request->hasFile('foto_admin')) {
                if ($admin->foto_admin) {
                    $previousFilePath = 'Pict/' . $admin->foto_admin;
                    if (file_exists($previousFilePath)) {
                        unlink($previousFilePath);
                    }
                }
            
                $foto_admin = $request->file('foto_admin');
                $foto_path = $foto_admin->move('Pict', $foto_admin->getClientOriginalName());
                $admin->foto_admin = $foto_path->getFilename();
            }

            $admin->save();
    
            return redirect()->route('profile')->with('success', 'Data berhasil diupdate');
        }
    
        return redirect()->route('profile')->with('error', 'Data tidak ditemukan');
    
    }
    public function add_prod(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|string|max:255',
            'kategori' => 'required|string|in:Makanan,Minuman, Roti dan Kue',
            'deskripsi_produk' => 'required|string|max:255',
            'gambar_produk' => 'required|file|mimes:jpeg,jpg,png',

        ]);
        if ($validator->fails()) {
            return redirect()->route('produk')->with('error','Isi Pendapat Anda Dengan Benar');
        }

        $data = Produk::create($request->all());
        if ($request->hasFile('gambar_produk')) {
            $request->file('gambar_produk')->move('Pict/', $request->file('gambar_produk')->getClientOriginalName());
            $data->gambar_produk = $request->file('gambar_produk')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('produk')->with('success','Data berhasil di update');
    }

    public function tambah_produk(){
        $data = Produk::all();
        return view('admin/tambah_menu',compact('data'),[
            "title" => "Produk"
        ]);
    }
    public function tambah_prom(){
        $data = Carousell::all();
        // dd($data);
        return view('admin/tambah_promosi',compact('data'),[
            "title" => "Promosi"
        ]);
    }

    public function add_prom(Request $request){
        $validator = Validator::make($request->all(), [
            'judul_carousel' => 'required|string|max:255',
            'deskripsi_carousel' => 'required|string|max:255',
            'gambar_carousel' => 'required|file|mimes:jpeg,jpg,png,mp4,mkv',

        ]);
        if ($validator->fails()) {
            return redirect()->route('promosi')->with('error','Isi Pendapat Anda Dengan Benar');
        }

        $data = Carousell::create($request->all());
        if ($request->hasFile('gambar_carousel')) {
            $request->file('gambar_carousel')->move('Pict/', $request->file('gambar_carousel')->getClientOriginalName());
            $data->gambar_carousel = $request->file('gambar_carousel')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('promosi')->with('success','Data berhasil di update');
    }

    public function sertifikat(){
        $data = Sertifikat::all();
        return view('admin/sertifikat',compact('data'),[
        "title" => "Sertifikat"
        ]);
    }

    public function carousel(){
        $data = Carousell::all();
        return view('admin/promosi',compact('data'),[
            "title" => "Promosi"
        ]);
    }
    public function profile()
    {
        $data = Admin::all();
        // dd($data);
        return view('admin/profile', compact('data'), [
            "title" => "Profile"
        ]);
    }
    public function ind_admin()
    {   
        $data = Admin::all();
        $countall = DB::table('produks')->count();
        $aktif = DB::table('produks')->where('status_produk', 'Aktif')->count();
        $nonaktif = DB::table('produks')->where('status_produk', 'Nonaktif')->count();
        $allfeed = DB::table('masukans')->count();
        $izin = DB::table('masukans')->where('status_masukan', 'Diizinkan')->count();
        $blokir = DB::table('masukans')->where('status_masukan', 'Diblokir')->count();
        // dd($tolaks);
        return view('admin/index', compact('countall','aktif','nonaktif','data','allfeed','izin','blokir'), [
            "title" => "index"
        ]);
    }
    
    public function masukan_admin()
    {
        $data = Masukan::all();
        // dd($data);
        return view('admin/masukan_admin', compact('data'), [
            "title" => "Feedback"
        ]);
    }
    
    public function menu_admin()
    {
        $data = Produk::paginate(8);
        // dd($data);
        return view('admin/menu_admin', compact('data'), [
            "title" => "Produk"
        ]);
    }

    
}
