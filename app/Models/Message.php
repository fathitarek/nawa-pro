<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Message extends Model
{
    use Translatable;

    protected $translatable = ['body'];

    protected $table = 'messages';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['body','from_user','to_user','is_read'];

    public function from(){
        return $this->hasOne('App\User', 'id', 'from_user');
    }

    public function to(){
        $this->hasOne('App\User', 'to_user');
    }
}
