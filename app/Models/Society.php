<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Society extends Model
{
    use HasFactory;

    protected $table = 'societies';

    protected $fillable = ['nik', 'name', 'username', 'password', 'phone'];

    public function Complaint()
    {
        return $this->hasMany(Complaint::class);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
