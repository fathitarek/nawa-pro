<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Service;
use Yajra\DataTables\Facades\DataTables;

class ServicesController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $services = Service::select(['id', 'title','description','image']);

        return Datatables::of($services)
                ->addColumn('images', 'vendor.voyager.general.images')
                ->addColumn('action', 'vendor.voyager.services.buttons')
                ->rawColumns(['images', 'action'])
                ->make(true);
    }

}
