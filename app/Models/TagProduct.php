<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagProduct extends Model
{
    use HasFactory;

    protected $table = 'product_tag';
    protected $primaryKey = 'id';
    protected $guarded = [];

}
