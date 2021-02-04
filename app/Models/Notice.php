<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(NoticeCategory::class,'notice_category_id');
    }
}
