
<td class="no-sort no-click" id="bread-actions">
    @can('delete', App\Models\Service::find($id))
    <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-right delete" data-id="{{ $id }}" id="delete-{{ $id  }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.delete') }}</span>
    </a>
    @endcan

    @can('edit', App\Models\Service::find($id))
    <a  title="{{ __('voyager.generic.edit') }}" class="btn btn-sm btn-primary pull-right edit" id='edit_action{{ $id }}'>
        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.edit') }}</span>
    </a>
    @endcan

    @can('read', App\Models\Service::find($id))
    <a  title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-right" id='view_action{{ $id }}'>
        <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">{{ __('voyager.generic.view') }}</span>
    </a>
    @endcan
</td>
<script>
    $(document).ready(function (){


    var href = location.href;
    var edit_href = href + "/" + "{{ $id }}" + "/edit";
    $("#edit_action" + {{ $id }}).attr('href', edit_href);
    var view_href = href + "/{{ $id }}";
    $("#view_action" + {{ $id }}).attr('href', view_href);
    });
    var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) { // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');
            console.log(form.action);

            $('#delete_modal').modal('show');
        });
</script>