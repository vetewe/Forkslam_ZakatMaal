<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarModel extends Model
{
    use HasFactory;
    protected $table = "bayar";
    protected $fillable = [
        'nominal',
        'metode_bayar',
    ];

    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
