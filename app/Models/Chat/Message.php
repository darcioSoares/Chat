<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }


}//end class
