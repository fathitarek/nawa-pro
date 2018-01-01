<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;


class PurposePosting extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    protected $table = 'purpose_postings';

    protected $fillable = [ 'text'];
}
