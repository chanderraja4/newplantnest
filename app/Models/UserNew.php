<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNew extends Model
{
    use HasFactory;
    protected $table = 'usernew';
    protected $primaryKey = 'id';
}
