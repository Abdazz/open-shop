<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $fillable = ['designation', 'prix', 'description', 'quantite', 'category_id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTO(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
