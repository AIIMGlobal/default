@extends('backend.layouts.app')
@section('title', ''.($global_setting->title ?? "").' | '.__('pages.Office Details'))
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{__('pages.Office Details')}}</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{__('messages.Dashboard')}}</a></li>
                            <li class="breadcrumb-item active">{{__('pages.Office Details')}}</li>
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
                    <h4 class="card-title mb-0 flex-grow-1">{{__('pages.Office Details')}}</h4>
                    <div class="flex-shrink-0">
                        {{-- <a href="{{url()->previous()}}" class="btn btn-primary">Back</a> --}}
                    </div>
                </div>
                <!-- end card header -->

                <div class="card-body">
                    <table class="table table-bordered table-striped m-auto" style="max-width: 600px">
                        <tbody>
                            <tr>
                                <th>{{__('pages.Office Name')}}:</th>
                                <td>{{$office->name}}</td>
                            </tr>
                            
                            <tr>
                                <th>{{__('pages.Division')}}:</th>
                                <td>{{$office->division ? $office->division->name : '-'}}</td>
                            </tr>
                            <tr>
                                <th>{{__('pages.District')}}:</th>
                                <td>{{$office->district ? $office->district->name : '-'}}</td>
                            </tr>
                            <tr>
                                <th>{{__('pages.Upazila')}}:</th>
                                <td>{{$office->upazila ? $office->upazila->name : '-'}}</td>
                            </tr>
                            
                            <tr>
                                <th>{{__('pages.Status')}}:</th>
                                <td>
                                    @if ($office->status == 1)
                                        {{__('pages.Active')}}
                                    @elseif ($office->status == 2)
                                    {{__('pages.Inactive')}}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>{{__('pages.Created By')}}:</th>
                                <td>{{$office->createdUser ? $office->createdUser->name_en : '-'}}</td>
                            </tr>
                            <tr>
                                <th>{{__('pages.Created At')}}   :</th>
                                <td>
                                    {{$office->created_at->format('d-m-Y')}}
                                </td>
                            </tr>


                        </tbody>
                    </table>
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
@endpush
