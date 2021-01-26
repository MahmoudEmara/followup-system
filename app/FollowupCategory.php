<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Followup;
class FollowupCategory extends Model
{
    public function followups(){
        return $this->hasMany(Followup::class);
    }
}
