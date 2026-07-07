<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
{
    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }
    public function getBuyableDescription($options = null) {
        return $this->name;
    }
    public function getBuyablePrice($options = null) {
        return $this->price;
    }
    public function getBuyableWeight($options = null) {
        return 0;
    }

    use HasFactory;
    protected $fillable = [
        'name','about','category_id','sub_category_id','price','short_description','long_description'
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

    public function subcategory() {
        return $this->belongsTo(\App\Models\SubCategory::class, 'sub_category_id');
    }

    public function pictures() {
        return $this->hasMany(\App\Models\Picture::class, 'product_id');
    }

    public function delete() {
		foreach ($this->pictures as $picture) {
			$picture->delete();
		}
		parent::delete();
	}
}
