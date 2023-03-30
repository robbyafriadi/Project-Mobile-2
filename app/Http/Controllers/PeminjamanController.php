<?php

namespace App\Http\Controllers;

use App\Models\ModelMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {

        $cari = $request->query('cari');
        if (!empty($cari)) {
            $dataMobil = ModelMobil::sortable()
                ->where('mobil.nama_mobil', 'like', '%' . $cari . '%')
                ->orWhere('mobil.harga_sewa', 'like', '%' . $cari . '%')
                ->paginate(5)->onEachSide(2)->fragment('mobil');
        } else {
            $dataMobil = ModelMobil::sortable()->paginate(2)->onEachSide(2)->fragment('mobil');
        }

        // $data = [
        //     'dataMobil' => ModelMobil::sortable()->paginate(5)->onEachSide(2)->fragment('mobil'),
        // ];
        // return View('mobil.data', $data);

        return View('peminjaman.datapeminjaman')->with([
            'dataMobil' => $dataMobil,
            'cari' => $cari,
            'user' => Auth::user(),
        ]);
    }

    public function add(ModelMobil $car)
    {

        // $cars = ModelMobil::latest()->get();
        return view('peminjaman.tambahpeminjaman', compact('car'))->with([
            'user' => Auth::user(),
        ]);
    }


    public function tambah($id_mobil)
    {
        $mobil = ModelMobil::find($id_mobil);
        $data = [
            'id_mobil' => $id_mobil,
            'nama_mobil' => $mobil->nama_mobil,
            'merk_mobil' => $mobil->merk_mobil,
            'tahun_mobil' => $mobil->tahun_mobil,
            'plat_mobil' => $mobil->plat_mobil,
            'bahan_bakar' => $mobil->bahan_bakar,
            'transmisi' => $mobil->transmisi,
            'kursi' => $mobil->kursi,
            'harga_sewa' => $mobil->harga_sewa,
            'gambar' => $mobil->gambar,
            'keterangan' => $mobil->keterangan,
            'deskripsi' => $mobil->deskripsi,
            'p3k' => $mobil->p3k,
            'charger' => $mobil->charger,
            'ac' => $mobil->ac,
            'audio' => $mobil->audio,

        ];

        return View('pelanggan.edit', $data)->with([
            'user' => Auth::user(),
        ]);
    }
}
