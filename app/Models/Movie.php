<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movies";
    protected $primaryKey = 'id';
    protected $fillable = ['name','description','image'];

    public function episodes(){
        return $this->hasMany(Episode::class);
    }
}
