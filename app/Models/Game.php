<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable=['name', 'developer', 'publisher', 'platform', 'price', 'release_date', 'description', 'image', 'CategoryID', 'DeveloperID'];
    public function game(){
        return $this->belongsTo('App\Models\Category');
    }
}
