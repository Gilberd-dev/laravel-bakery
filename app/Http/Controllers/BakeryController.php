<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Produk;
use App\Models\Masukan;
use App\Models\Prestasi;
use App\Models\Carousell;
use App\Models\Sertifikat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class BakeryController extends Controller
{   
    


   

    public function insert(){
        return view('insert');
    }


    public function kirimPesanan(Request $request)
    {
        if ($request->has('kirim')) {
            if ($request->has('pesanan')) {
                $nama = trim($request->input('nama'));
                $nomor = trim($request->input('nomor'));
                $alamat = trim($request->input('alamat'));
                $catatan = trim($request->input('catatan'));
                $pesan = "";
    
                foreach ($request->input('pesanan') as $pesanan) {
                    $jumlah = $request->input('jumlah_' . str_replace(' ', '_', $pesanan));
    
                    if ($jumlah > 0) {
                        $pesan .= "%0D*" . $pesanan . " : " . $jumlah . "*";
                    }
                }
    
                if ($pesan != "") {
                    $admin = DB::table('admins')->first();
                    $nomor_telepon = $admin->nomor_telepon_admin;
    
                    $url = "https://api.whatsapp.com/send?phone=$nomor_telepon&text=Halo%20Pizza%20Etnik%20Toba%20Bakery%0D%0DData%20diri%20saya:%20%0DNama:%20*$nama*%0DAlamat%20Alamat%20Pengiriman:%20*$alamat*%0DMenu%20yang%20dipesan:$pesan%0D%0DNOTES:%20*$catatan*";
    
                    return Redirect::away($url);
                } else {
                    return redirect()->route('menu')->with('error', 'Mohon pilih minimal satu pesanan.');
                }
            } else {
                return redirect()->route('menu')->with('error', 'Mohon pilih minimal satu pesanan.');
            }
        }
    }

    public function masukan()
    {
        $data = Masukan::where('status_masukan', 'Diizinkan')->get();
        return view('masukan', compact('data'), [
            "title" => "Masukan"
        ]);
    }

    public function insertmasukan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pengunjung' => 'required|string|max:255',
            'email_pengunjung' => 'required|email|max:255',
            'teks_masukan' => 'required|string|max:255',
            'gambar_video_masukan' => 'required|file|mimetypes:image/jpeg,image/jpg,image/png,video/mp4,video/x-matroska'

        ]);
        if ($validator->fails()) {
            return redirect()->route('masukan')->with('error','Isi Pendapat Anda Dengan Benar');
        }

        $data = Masukan::create($request->all());
        if ($request->hasFile('gambar_video_masukan')) {
            $request->file('gambar_video_masukan')->move('Pict/', $request->file('gambar_video_masukan')->getClientOriginalName());
            $data->gambar_video_masukan = $request->file('gambar_video_masukan')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('masukan')->with('success','Data berhasil di update');
        
    }
    
    public function Beranda()
    {
        $cars = Carousell::all();
        $data = Masukan::where('status_masukan', 'Diizinkan')->take(4)->get();
        return view('Beranda', compact('data','cars'), [
            "title" => "Beranda"
        ]);
        
    }



    public function tentang_user()
    {
        $pres = Prestasi::all();
        $sers = Sertifikat::all();
        $i = 0;
        return view('tentang',compact('pres','i','sers'), [
            "title" => "Tentang"
        ]);
        
    }
    public function pesan()
    {
        $alls = Produk::where('status_produk', 'Aktif')->get();
        $rotis = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Roti dan Kue')
            ->get();
        $minumans = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Minuman')
            ->get();
        $makanans = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Makanan')
            ->get();

        return view('sekarang', compact('alls','rotis', 'minumans', 'makanans'),[
            "title" => "Menu"
        ]);
    }
    public function pesannnn()
    {
        return view('sekarang', [
            "title" => "Tentang"
        ]);
    }



    public function menu_user()
    {
        $alls = Produk::where('status_produk', 'Aktif')->paginate(8);
        $rotis = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Roti dan Kue')
            ->get();
        $minumans = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Minuman')
            ->get();
        $makanans = DB::table('Produks')->where('status_produk', 'Aktif')
            ->where('kategori', 'Makanan')
            ->get();
        return view('Menu', compact('alls','rotis', 'minumans', 'makanans'), [
            "title" => "Menu"
        ]);
    }

    // public function menu_makanan(){

    //     $foods = Produk::where('status_produk','Akt if') 
    //     ->where('kategori','=','Makanan')
    //     -> get();
    //     return view('Menu', compact('foods'),[
    //         "title" => "Menu"
    //     ]);
    // }
    // public function menu_minuman(){

    //     $drinks = Produk::where('status_produk','Aktif') 
    //     ->where('kategori','=','Minuman')
    //     -> get();
    //     return view('Menu', compact('drinks'));
    // }

    // public function menu_kue(){

    //     $cakes = Produk::where('status_produk','Aktif') 
    //     ->where('kategori','=','Roti dan Kue')
    //     -> get();
    //     return view('Menu', compact('cakes'));
    // }

}
