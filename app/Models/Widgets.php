<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Widgets extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
