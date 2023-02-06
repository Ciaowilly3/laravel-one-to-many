<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "type_id","name", "description", "cover_img", "git_link"
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
