<?php

function getMyAllOptions(){
    $result['purpose_postings'] = \App\Models\PurposePosting::all();
        $result['property_statuses'] = \App\Models\PropertyStatus::all();
        $result['property_types'] = \App\Models\PropertyType::all();
        $result['property_forms'] = \App\Models\PropertyForm::all();
        $result['districts'] = \App\Models\District::all();
        $result['developers'] = \App\Models\Developer::all();
        $result['degree_ownerships'] = \App\Models\DegreeOwnership::all();
        $result['property_options'] = \App\Models\PropertyOption::all();
        return $result;
}


