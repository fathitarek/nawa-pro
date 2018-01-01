<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class RemoveReason extends Model
{
    use Translatable;
    protected $translatable = ['title'];

    protected $table = 'remove_reasons';

    protected $fillable = ['title'];
}
