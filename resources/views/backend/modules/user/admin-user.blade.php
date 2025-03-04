@extends('layouts.backend.master')

@section('title','OBS - Admin User')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">Adminstration List</h4>
                </div>
            </div>
        </div><!-- end page title -->

        @include('backend.modules.user.components.user-count')

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    {{-- <h2 class="float-left">Call reports</h2> --}}
                    <div class="responsive-table-plugin">
                        <div class="table-wrapper">
                            <div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table table-bordered" id="dtable">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>ই-মেইল</th>
                                                <th>User টাইপ</th>
                                                <th>Created তারিখ</th>
                                                <th>স্ট্যাটাস</th>
                                                <th class="text-center">অ্যাকশন </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ( !empty($userList) )
                                                @foreach ($userList as $key => $user)
                                                    <tr class="odd" role="row">
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->getUserType($user->user_type) }}</td>
                                                        <td>
                                                            {{$user->created_at->format('d-m-Y')}}
                                                        </td>
                                                        <td>{!! $user->activeStatus($user->status) !!}</td>
                                                        <td class="text-center">
                                                            @if ( auth()->user()->id == $user->id || $user->id == 1 )
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary" onclick="alert('You have no permission to delete')">Delete</a>
                                                            @elseif(auth()->user()->user_type === 1)
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="return deleteItem(`{{ route('users.destroy',$user->id) }}`)"> Delete</a>
                                                            @else
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-secondary" onclick="alert('You have no permission to delete')">Delete</a>
                                                            @endif
                                                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-success"> সম্পাদনা</a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-blue" onclick="return getUserDetailsbyUserId({{ $user->id }})" title="বিস্তারিত"> দেখুন </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table><!-- end .table-responsive -->
                                </div>
                            </div><!-- end .table-rep-plugin-->
                        </div><!-- end .responsive-table-plugin-->
                    </div><!-- end card-box -->
                </div>
            </div><!-- end row-->
        </div>
    <!-- User বিস্তারিত modal content -->
    @include('backend.modules.user.components.userdetails-modal')
    <!-- Delete modal content -->
    @include('backend.components.delete-modal')
@endsection
@include('backend.components.datatable')

@push('scripts')
    @include('backend.modules.user.components.script')
@endpush

@push('styles')
    <style>
    .page-title-box {
        background: #4A81D4;
        color: #fff;
        margin-left: -30px;
        margin-right: -30px;
        padding-left: 30px;
        height: 220px;
    }


    .page-title-box .page-title {
        font-size: 39px  !important;
        color: #fff !important;
        padding-top: 23px !important;
        padding-left: 37px !important;
    }
    .mt-100{ margin-top: -100px; }
    </style>
@endpush
