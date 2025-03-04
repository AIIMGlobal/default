@extends('layouts.backend.master')

@section('title','OBS - All Customer')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">All Customer</h4>
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
                                                <th>ID</th>
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
                                                        <td><b>{{ ++$key }}</b></td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->getUserType($user->user_type) }}</td>
                                                        <td>
                                                            {{$user->created_at->format('d-m-Y')}}
                                                        </td>
                                                        <td>{!! $user->activeStatus($user->status) !!}</td>
                                                        <td class="text-center">
                                                            @if ( auth()->user()->id == $user->id || $user->id == 1 )
                                                                <a href="javascript:void(0)" class="action-icon" onclick="alert('You have no permission to delete')"><i class="fas fa-trash-alt text-secondary"></i></a>
                                                            @elseif(auth()->user()->user_type === 1)
                                                                <a href="javascript:void(0)" class="action-icon" onclick="return deleteItem(`{{ route('users.destroy',$user->id) }}`)"> <i class="fas fa-trash-alt text-danger"></i></a>
                                                            @else
                                                                <a href="javascript:void(0)" class="action-icon" onclick="alert('You have no permission to delete')"><i class="fas fa-trash-alt text-secondary"></i></a>
                                                            @endif
                                                            <a href="{{ route('users.edit',$user->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline text-success"></i></a>
                                                            <a href="javascript:void(0);" class="action-icon" onclick="return getUserDetailsbyUserId({{ $user->id }})" title="Details"> <i class="mdi mdi-eye text-dark"></i></a>
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
    </div>
    <!-- User Details modal content -->
    @include('backend.modules.user.components.userdetails-modal')
    <!-- Delete modal content -->
    @include('backend.components.delete-modal')
@endsection
@include('backend.components.datatable')
@push('scripts')
    @include('backend.modules.user.components.script')
@endpush
