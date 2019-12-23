<?php

namespace App\Models;

use Balping\HashSlug\HasHashSlug;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasHashSlug;

    protected $guarded = ['id'];

    public function submitter(){
        return $this->belongsTo(User::class,'submitter_id');
    }
}
