<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GuestBoard extends Model
{
    //
    use SoftDeletes;

    protected $table = 'guestboards';
    protected $guarded = ['id'];
}
