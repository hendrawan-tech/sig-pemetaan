<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaksi extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['total', 'user_id'];

    protected $searchableFields = ['*'];

    protected $table = 'detail_transaksis';

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
