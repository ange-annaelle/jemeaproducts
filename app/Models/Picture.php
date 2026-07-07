<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = [
        'picture','picture','product_id'
    ];

    public function product() {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }

    public function delete()
    {
        if (file_exists(public_path() . '/images/product/' . $this->picture)) {
            @unlink(public_path() . '/images/product/' . $this->picture);
        }
        parent::delete();
    }
}
