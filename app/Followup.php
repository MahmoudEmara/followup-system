<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FollowupCategory;
use App\FollowupReply;
class Followup extends Model
{
    public function replies(){
        return $this->hasMany(FollowupReply::class);
    }

    public function category(){
        return $this->belongsTo(FollowupCategory::class);
    }
}
