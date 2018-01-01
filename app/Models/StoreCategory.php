<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class StoreCategory extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'store_categories';

    protected $fillable = ['text'];
}
