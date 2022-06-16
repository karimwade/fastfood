<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['titre','description'];
    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
