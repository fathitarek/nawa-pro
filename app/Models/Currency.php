<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Currency extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'currencies';

    protected $fillable = ['text'];
}
