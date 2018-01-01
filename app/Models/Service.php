<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    use Translatable;
    protected $translatable = ['title','description'];

    protected $table = 'services';

    protected $fillable = ['title','description','image'];

    public function companies() {
        return $this->hasMany('App\Models\Company');
    }
}
