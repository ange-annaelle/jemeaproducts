<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image','about','category_id'
    ];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function category() {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function products() {
        return $this->hasMany(\App\Models\Product::class, 'sub_category_id');
    }

    public function delete()
    {
        if (file_exists(public_path() . '/images/subcategory/' . $this->image)) {
            @unlink(public_path() . '/images/subcategory/' . $this->image);
        }
        parent::delete();
    }
}
