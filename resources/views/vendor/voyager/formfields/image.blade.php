@if(isset($dataTypeContent->{$row->field}))
    <img   accept="image/*" src="@if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $dataTypeContent->{$row->field} ) }}@else{{ $dataTypeContent->{$row->field} }}@endif"
         style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
@endif
<input accept="image/*"


       @if(!isset($dataTypeContent->{$row->field})) required @endif

       type="file"   data-name="{{ $row->display_name }}"  name="{{ $row->field }}" >

