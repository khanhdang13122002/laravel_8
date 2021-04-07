<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $table='users';
    protected $fillable=['name','email','password'];
    use HasFactory;
    public function signup(){
        return $this->save();
    }
}
