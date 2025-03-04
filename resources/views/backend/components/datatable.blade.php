
@push('styles')
<link rel="stylesheet" href="{{ asset('public/admin-assets/assets/libs/datatables/dataTables.bootstrap4.css') }}">

@endpush
@push('scripts')
<script src="{{ asset('public/admin-assets/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin-assets/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>

<script>
    jQuery.extend( jQuery.fn.dataTableExt.oSort, {
            "currency-pre": function ( a ) {
                a = (a==="-") ? 0 : a.replace( /[^\d\-\.]/g, "" );
                return parseFloat( a );
            },
            


            "currency-asc": function ( a, b ) {
                return a - b;
            },

            "currency-desc": function ( a, b ) {
                return b - a;
            }
        } );


    $(document).ready(function() {
        $('#dtable').DataTable({
            columnDefs: [
                 { type: '$', targets: 0 }
               ]
        });
    } );
</script>
@endpush