<?php

namespace App\Http\Controllers\Datatables;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Property;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class PropertiesController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index(Request $request) {
        $properties = Property::select([
                    'properties.id',
                    'properties.title',
                    'properties.price',
                    'properties.longtitude',
                    'properties.latitiude',
                    'property_statuses.text as text_status',
                    'districts.text as text_district'
                ])->leftJoin('property_statuses', 'property_statuses.id', '=', 'properties.property_status_id')
                ->leftJoin('districts', 'districts.id', '=', 'properties.district_id');
// having count search
        


$datatables = app('datatables')->of($properties)
                ->addColumn('action', 'vendor.voyager.properties.buttons');
        if ($price = $datatables->request->get('price')) {
            $properties->where('properties.price', $datatables->request->get('operator'), $price);
        }

        // additional users.name search
        if ($title = $datatables->request->get('title')) {
            $properties->where('properties.title', 'like', "$title%");
        }
        
        return $datatables->make(true);
    }

}
