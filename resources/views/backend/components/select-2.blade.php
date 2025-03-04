
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2()
        })
    </script>

@if(session()->has('FlsMsg'))
    <script>
        swal("Good job!", `{!! session('FlsMsg') !!}`, "success");
    </script>
@endif
@endpush