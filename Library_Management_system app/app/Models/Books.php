<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function book_details()
    {
        return $this->hasOne(Book_details::class,'Book_id','id');
    }
    public function borrowed_book()
    {
        return $this->hasMany(Book_issuing::class,'Book_id','id');
    }
}
