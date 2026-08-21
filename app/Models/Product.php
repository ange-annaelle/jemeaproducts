<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
{
    use HasFactory, Sluggable;

    /**
     * Les champs autorisés pour l'assignation en masse.
     */
    protected $fillable = [
        'name',
        'slug', // Ajout indispensable pour autoriser l'insertion du slug
        'about',
        'category_id',
        'sub_category_id',
        'price',
        'short_description',
        'long_description'
    ];

    /* --- Implémentation de la carte d'achat (Buyable) --- */
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

    /**
     * Configuration pour la génération automatique du Slug.
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /* --- Relations --- */
    public function category() {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    public function subcategory() {
        return $this->belongsTo(\App\Models\SubCategory::class, 'sub_category_id');
    }

    public function pictures() {
        return $this->hasMany(\App\Models\Picture::class, 'product_id');
    }

    /* --- Override de la suppression pour nettoyer les images --- */
    public function delete() {
        foreach ($this->pictures as $picture) {
            $picture->delete();
        }
        return parent::delete();
    }
}