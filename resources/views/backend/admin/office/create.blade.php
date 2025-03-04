@extends('backend.layouts.app')
@section('title', ''.($global_setting->title ?? "").' | '.__('Add New Office'))
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{__('pages.Add New Office')}}</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{__('menu.Dashboard')}}</a></li>
                            <li class="breadcrumb-item active">{{__('pages.Add New Office')}}</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="col-xxl-12">

                @include('backend.admin.partials.alert')

                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">{{__('pages.Add New Office')}}</h4>
                        <div class="flex-shrink-0">
                            <a href="{{URL::previous()}}" class="btn btn-primary">{{__('pages.Back')}}</a>
                        </div>
                    </div>
                    

                    <div class="card-body">
                        <form action="{{route('admin.office.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
        
                                <div class="col-md-4 col-sm-12">
                                    <div>
                                        <label for="name" class="form-label">{{__('pages.Office Name')}} <span style="color:red;">*</span></label>
                                        <input id="name" type="text" class="form-control" name="name" placeholder=" Office Name" required>
                                    </div>
                                </div><!--end col-->
                                
                                <div class="col-md-4 col-sm-12">
                                    <label for="division" class="form-label">{{__('pages.Division')}}<span style="color:red;">*</span></label>
                                    <select name="division" class="form-control division_id_0 select2" id="present_division_id" required>
                                        <option value="">--{{__('pages.Division')}}--</option>
                                        @foreach ($divisions as $division)
                                            <option value="{{$division->id}}">{{$division->name}}</option>
                                        @endforeach
                                    </select>
                                </div><!--end col-->
                                <div class="col-md-4 col-sm-12">
                                    <label for="district" class="form-label">{{__('pages.District')}}</label>
                                    <select name="district" class="form-control district_id_0 select2" id="present_district_id">
                                        <option value="">--{{__('pages.District')}}--</option>

                                    </select>
                                </div><!--end col-->
                                <div class="col-md-4 col-sm-12">
                                    <label for="upazila" class="form-label">{{__('pages.Upazila')}}</label>
                                    <select name="upazila" class="form-control upazila_id_0 select2" id="present_upazila_id">
                                        <option value="">--{{__('pages.Upazila')}}--</option>

                                    </select>
                                </div><!--end col-->
                                
                                <div class="col-md-4 col-sm-12 mt-4">
                                    <div class="form-check form-switch form-switch-custom form-switch-success mt-4">
                                        <input class="form-check-input" type="checkbox" role="switch" name="status" id="statusOption" checked value="1">
                                        <label class="form-check-label" for="statusOption">{{__('pages.Status')}}</label>
                                    </div>
                                </div><!--end col-->
                                <div>
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">{{__('pages.Submit')}}</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>

@endsection

@push('script')
    <script>
        $('[href*="{{$menu_expand}}"]').addClass('active');
        $('[href*="{{$menu_expand}}"]').closest('.menu-dropdown').addClass('show');
        $('[href*="{{$menu_expand}}"]').closest('.menu-dropdown').parent().find('.nav-link').attr('aria-expanded','true');
        $('[href*="{{$menu_expand}}"]').closest('.first-dropdown').find('.menu-link').attr('aria-expanded','true');
        $('[href*="{{$menu_expand}}"]').closest('.first-dropdown').find('.menu-dropdown:first').addClass('show');
    </script>

    <script>
        // dynamic address AJAX for present district
        $("#present_division_id").on('change',function(e){
            e.preventDefault();

            let present_district_id = $("#present_district_id");
            let present_upazila_id = $("#present_upazila_id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{route('admin.districts')}}",
                data: {_token:$('input[name=_token]').val(),
                division_id: $(this).val()},

                success:function(response){
                    $('option', present_district_id).remove();
                    $('option', present_upazila_id).remove();
                    $('#present_district_id').append('<option value="">--Select District--</option>');
                    $('#present_upazila_id').append('<option value="">--Select Upazila/Thana--</option>');
                    $.each(response, function(){
                        $('<option/>', {
                            'value': this.id,
                            'text': this.name
                        }).appendTo('#present_district_id');
                    });
                }

            });
        });

        // dynamic address AJAX for present upazila/thana
        $("#present_district_id").on('change',function(e){
            e.preventDefault();

            let present_upazila_id = $("#present_upazila_id");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "{{route('admin.upazilas')}}",
                data: {_token:$('input[name=_token]').val(),
                district_id: $(this).val()},

                success:function(response){
                    $('option', present_upazila_id).remove();
                    $('#present_upazila_id').append('<option value="">--Select Upazila/Thana--</option>');
                    $.each(response, function(){
                        $('<option/>', {
                            'value': this.id,
                            'text': this.name
                        }).appendTo('#present_upazila_id');
                    });
                }

            });
        });
    </script>
@endpush