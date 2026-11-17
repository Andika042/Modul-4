<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    // inisialisasi tabel category_product
    protected $table = 'category_product';

    // inisialisasi primary key di dalam tabel
    protected $primaryKey = 'id_category';

    // inisialisasi kolom yang TIDAK dapat diisi secara massal
    protected $guarded = ['id_category'];
}
