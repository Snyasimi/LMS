<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_details extends Model
{
    use HasFactory,HasUlids;
    public $incrementing = false;
    protected $KeyType = 'string';


    public function book_detail()
    {
        return $this->belongsTo(Books::class,'Book_id','id');
    }
}
