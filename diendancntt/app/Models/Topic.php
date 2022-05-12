<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = "Topic";
    public $timestamps = false;
    protected $fillable = ["id","Name"];
    public function Post(){
    	return $this->hasMany(Post::class);
    }
}
