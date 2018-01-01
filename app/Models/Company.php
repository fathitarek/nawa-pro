<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Company extends Model
{
    use Translatable;
    protected $translatable = ['title','description','address'];

    protected $table = 'companies';

    protected $fillable = ['title','description','address','phone'];
    public function service() {
        return $this->belongsTo('App\Models\Service');
    }
}
