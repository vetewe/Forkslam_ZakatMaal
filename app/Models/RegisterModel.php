<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    use HasFactory;
    protected $table = "biodata";
    protected $fillable = [
        'email',
        'pass',
        'nama',
        'no_hp',
        'alamat',
        'jk',
    ];

    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
