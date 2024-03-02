<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    protected $fillable = [
        'name',
        'category',
        'description',
        'images',
        'brend',
        'price',
        'zapremina0cm3',
        'snaga',
        'tezina',
        'napon',
        'aku0tehnologija',
        'rezna0dubina',
        'optimalna0povrsina0travnjaka',
        'sirina0kosnje',
        'visina0kosnje',
        'jacina0zvucnog0pritiska',
        'radni0pritisak',
        'maks0pritisak',
        'maks0temperatura0vode',
        'kolicina0usisanog0zraka',
        'duzina0usisnog0creva',
    ];
}
