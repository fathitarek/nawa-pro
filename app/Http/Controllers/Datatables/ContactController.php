<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Models\Contact;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $contacts = Contact::select(['id', 'name','email','phone','message']);

        return Datatables::of($contacts)
                
                ->addColumn('action', 'vendor.voyager.contacts.buttons')
                
                ->make(true);
    }

}
