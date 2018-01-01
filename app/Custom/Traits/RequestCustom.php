<?php

namespace App\Custom\Traits;

use Illuminate\Http\Request;

Trait RequestCustom {

    public $custom_request;

    public function setReq(Request $request) {
        $this->custom_request = $request;
    }

}
