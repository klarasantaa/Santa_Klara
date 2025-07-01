<?php

namespace App\Models;

use App\JenisTransaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransaksiStock extends Model
{
    protected $table = 'transaksi_stock';

    protected $fillable = [
        'tanggal',
        'stock_id',
        'keterangan',
        'jenis_keterangan',
        'jumlah',
    ];

    public function stock(): belongsTo
    {
        return $this->belongsTo(
            Stock::class,
            'stock_id',
            'id'
        );
    }

    protected function casts(): array
    {
        return [
            'jenis_transaksi' => JenisTransaksi::class,
        ];
    }
}
