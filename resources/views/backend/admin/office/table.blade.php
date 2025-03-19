@if ($offices->count() > 0)
    @php
        $i = 1;
    @endphp

    @foreach ($offices as $office)
        <tr>
            <td class="text-center">{{ $i }}</td>
            <td>{{ $office->name ?? '-' }}</td>
            <td>{{ $office->division->name ?? '-' }}</td>
            <td>{{ $office->district->name ?? '-' }}</td>
            <td>{{ $office->upazila->name ?? '-' }}</td>
            
            <td>
                @if ($office->status == 0)
                    <span class="badge bg-danger">Inactive</span>
                @elseif($office->status == 1)
                    <span class="badge bg-success">Active</span>
                @endif
            </td>

            <td class="text-center">
                @can('view_office')
                    <a href="{{ route('admin.office.show', $office->id) }}" title="View " type="button" class="btn btn-success btn-sm btn-icon waves-effect waves-light">
                        <i class="las la-eye" style="font-size: 1.6em;"></i>
                    </a>
                @endcan

                @can('edit_office')
                    <a href="{{ route('admin.office.edit', $office->id) }}" title="Edit" class="btn btn-info btn-sm btn-icon waves-effect waves-light">
                        <i class="las la-edit" style="font-size: 1.6em;"></i>
                    </a>
                @endcan

                @can('delete_office')
                    <a onclick="return confirm('Are you sure, you want to Delete the office ?')" href="{{ route('admin.office.delete', Crypt::encryptString($office->id)) }}" title="Delete" class="btn btn-sm btn-danger btn-icon waves-effect waves-light">
                        <i class="las la-times-circle" style="font-size: 1.6em;"></i>
                    </a>
                @endcan
            </td>
        </tr>

        @php
            $i++;
        @endphp
    @endforeach
@else
    {{-- <tr>
        <td colspan="100%" class="text-center"><b>{{__('pages.No Data Found') }}</b></td>
    </tr> --}}
@endif