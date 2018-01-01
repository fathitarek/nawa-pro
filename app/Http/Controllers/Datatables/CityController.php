<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\City;
use Yajra\DataTables\Facades\DataTables;

class CityController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $cities = City::select(['id', 'text']);

        return Datatables::of($cities)
                ->addColumn('districts', 'vendor.voyager.cities.districts')
                ->addColumn('action', 'vendor.voyager.cities.buttons')
                ->rawColumns(['districts', 'action'])
                ->make(true);
    }

}
