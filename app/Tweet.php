<?php

namespace App;

use App\Http\Controllers\Like;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
