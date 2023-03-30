<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class ModelPeminjaman extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Sortable;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = true;

    public $sortable = [
        'id_transaksi', 'id_mobil', 'nama_mobil', 'plat_mobil', 'harga_sewa', 'gambar', 'keterangan',
        'tanggal_pinjam', 'lama_pinjam', 'total_harga', 'status',
    ];
}
