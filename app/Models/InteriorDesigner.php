<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class InteriorDesigner extends Model
{
    use Translatable;
    protected $translatable = ['name','desc'];

    protected $table = 'interior_designers';

    protected $fillable = ['name','desc','facebook','instagram','website','photo'];

    public function interiorDesginImages() {
        return $this->hasMany('App\Models\InteriorDesignersImage');
    }
}
