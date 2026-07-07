<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image','about'
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

    public function subcategories() {
        return $this->hasMany(\App\Models\SubCategory::class, 'category_id');
    }

    public function products() {
        return $this->hasMany(\App\Models\Product::class, 'category_id');
    }

    public function delete()
    {
        if (file_exists(public_path() . '/images/category/' . $this->image)) {
            @unlink(public_path() . '/images/category/' . $this->image);
        }
        parent::delete();
    }

}
