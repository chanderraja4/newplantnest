<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plants extends Model
{
    use HasFactory;
    protected $table = 'plants';
    protected $primaryKey = "id";
    
    protected $fillable = [
        'category_id',
        'plant_name',
        'description',
        'price',
        'plant_image',
    ];
    public function user(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
