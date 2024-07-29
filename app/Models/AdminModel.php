<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = "admin";
    protected $fillable = [
        'nama',
        'jk',
        'no_hp',
        'email',
        'jenis_zakat',
        'nominal',
        'haul',
    ];
    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
