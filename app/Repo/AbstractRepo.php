<?php

namespace App\Repo;

use Illuminate\Http\Request;

Class AbstractRepo {

    public $custom_request;

    public function __construct(Request $request) {
        $this->custom_request = $request;
    }

}
