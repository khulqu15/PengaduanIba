<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $table = 'complaints';

    protected $fillable = ['society_id', 'report', 'picture', 'status'];

    public function Society()
    {
        return $this->belongsTo(Society::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);   
    }

    public function Response()
    {
        return $this->hasMany(Response::class);
    }
}
