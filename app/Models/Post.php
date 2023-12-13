<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];
    // table name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    public $timeStamps = true;
}
