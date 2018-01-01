<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Repo\DockRepo;
class ServicesController extends FrontController
{

    public function __construct(DockRepo $dock_repo) {
        $this->DockRepo = $dock_repo;
    }

    public function index() {
        $data=$this->DockRepo->listData('App\Models\Service',10,'front.dock.services.index');
        return $data;
    }
    public function find($id){
        $data=$this->DockRepo->listDataAsFK('App\Models\Company', $id,'service_id', 10, 'front.dock.services.companies');
        return $data;
    }

}
