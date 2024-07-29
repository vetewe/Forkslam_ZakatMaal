<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatModel extends Model
{
    use HasFactory;
    protected $table = "zakat";
    protected $fillable = [
        'jenis_dana',
        'jenis_zakat',
    ];

    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
