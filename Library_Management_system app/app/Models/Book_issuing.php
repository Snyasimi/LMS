<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Book_issuing extends Model
{
    use HasFactory;
    use  HasUlids;

    public $incrementing = false;
    protected $KeyType = 'string';

    public function borrower()
    {
        return $this->belongsTo(User::class,'User_id','User_id');
    }
    public function book_borrowed()
    {
        return $this->belongsTo(Books::class,'Book_id','id');
    }
    
}
