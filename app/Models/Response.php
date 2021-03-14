<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = ['complaint_id', 'response', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Complaint()
    {
        return $this->belongsTo(Complaint::class);
    }
}
