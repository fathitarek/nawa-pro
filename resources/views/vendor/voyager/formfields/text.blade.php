<input required @if($row->required == 1)  @endif type="text"  data-name="{{ $row->display_name }}"  class="form-control" name="{{ $row->field }}"
        placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
       {!! isBreadSlugAutoGenerator($options) !!}
       value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@elseif(isset($options->default)){{ old($row->field, $options->default) }}@else{{ old($row->field) }}@endif">

