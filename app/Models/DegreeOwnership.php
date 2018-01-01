<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class DegreeOwnership extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'degree_ownerships';

    protected $fillable = [ 'text'];
}
