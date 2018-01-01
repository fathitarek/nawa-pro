<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\UserType;
use Yajra\DataTables\Facades\DataTables;

class UserTypeController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $user_types = UserType::select(['id', 'title','limit_property']);

        return Datatables::of($user_types)
                
                ->addColumn('action', 'vendor.voyager.user-types.buttons')
                
                ->make(true);
    }

}
