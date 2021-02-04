<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeCategory extends Model
{
    use HasFactory;
    public function notices(){
        return $this->hasMany(Notice::class,'notice_category_id');
    }
}
