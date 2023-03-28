<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    
    use HasFactory;
    public $table = "newsTable";
    protected $fillable = ['topicName','articleContent','mediaHighlight','mediaContent','publishDate'];
    //protected $fillable = ['contentType','topicName','intro','articleContent','newsStatus','mediaHighlight','mediaContent','publishDate'];
}
