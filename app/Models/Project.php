<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class Project extends Model
{
    use Translatable;
    protected $translatable = ['title'];

    protected $table = 'projects';

    protected $fillable = ['title','featured','brochure','user_id','parent_id','type','related_id'];
}
