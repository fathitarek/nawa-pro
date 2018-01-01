<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class InteriorDesignersImage extends Model
{
    protected $table = 'interior_designers_images';

    protected $fillable = ['image','interior_designer_id'];

    public function interiorDesgin() {
        return $this->belongsTo('App\Models\InteriorDesigner');
    }
}
