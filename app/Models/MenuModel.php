<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    use HasFactory;

    protected $table = 'menu_items';        //omdat de class menumodel heet verwacht hij dat de tabel in de database ook menumodel heet doormiddel van deze line overschrijf je het waaroor hij nu weet dat de tabel menu_items heet
    protected $price;
}
