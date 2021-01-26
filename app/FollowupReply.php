<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Followup;
class FollowupReply extends Model
{
    public function followup (){
        return $this->belongsTo(Followup::class);
    }
}
