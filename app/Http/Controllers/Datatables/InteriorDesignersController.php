<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\InteriorDesigner;
use Yajra\DataTables\Facades\DataTables;

class InteriorDesignersController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $InteriorDesigner = InteriorDesigner::select(['id', 'name','desc','website','photo']);

        return Datatables::of($InteriorDesigner)
                ->addColumn('photos', 'vendor.voyager.general.images')
                ->addColumn('action', 'vendor.voyager.interior-designers.buttons')
                ->rawColumns(['photos', 'action'])
                ->make(true);
    }

}
