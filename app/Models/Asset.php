<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'jantina',
    //     'no_kakitanagan',
    //     'jawatan',
    //     'no_telefon',
    //     'no_telefon_pejabat',
    //     'alamat_pejabat',
    // ];
    protected $table = 'assets';
}
