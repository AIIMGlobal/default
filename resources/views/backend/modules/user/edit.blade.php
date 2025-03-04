@extends('layouts.backend.master')

@section('title','ইউজার সম্পাদনা')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">ইউজার সম্পাদনা</h4>
                </div>
            </div>
        </div><!-- end page title -->
        <div class="row mt-100">
            <div class="col-12">
                <a href="{{ route('users.index') }}" class="btn btn-secondary mb-2">ইউজার লিস্ট</a>
                <button class="btn btn-dark mb-2"  data-toggle="modal" data-target="#password-modal">পাসওয়ার্ড আপডেট করুন</button>

                <form action="{{ route('users.update',['user' => $userDetails->id]) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="short-content card-box">

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="user_type">ইউজার টাইপ <span class="text-danger">*</span></label>
                                            <input type="text" readonly value="{{ $userDetails->getUserType($userDetails->user_type) }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="first_name">First নাম <span class="text-danger">*</span></label>
                                            <input class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name" placeholder="First নাম" value="{{ old('first_name',$userDetails->first_name) }}" type="text" required>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="middle">Middle নাম <span class="text-danger"></span></label>
                                            <input class="form-control" id="middle" name="middle_name" placeholder="Middle নাম" type="text" value="{{ old('middle_name' ,$userDetails->middle_name) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="last_name">Last নাম <span class="text-danger">*</span></label>
                                            <input class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name" placeholder="Last নাম" value="{{ old('last_name' ,$userDetails->last_name) }}" type="text" required>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_address">ই-মেইল <span class="text-danger">*</span></label>
                                            <input class="form-control @error('email_address') is-invalid @enderror" id="email_address" name="email_address" value="{{ old('email_address' ,$userDetails->email) }}" placeholder="ই-মেইল" type="email" required>
                                            @error('email_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                @if ($userDetails->user_type == 3)
                                    <div class="row" id="dynamic-data-for-customer">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mobile_number">মোবাইল Number <span class="text-danger">*</span></label>
                                                <input class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" value="{{ old('mobile_number' ,$userDetails->mobile_number) }}" placeholder="মোবাইল Number" type="text" required>
                                                @error('mobile_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dob">তারিখ of Birth <span class="text-danger">*</span></label>
                                                <input class="form-control basic-datepicker @error('dob') is-invalid @enderror" value="{{ old('dob' ,$userDetails->dob) }}" id="dob" name="dob" placeholder="তারিখ of Birth" type="date" required>
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender">লিঙ্গ নির্বাচন করুন <span class="text-danger">*</span></label>
                                                <select name="gender" id="gender" class="form-control select2" required>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="street_address">Street ঠিকানা <span class="text-danger">*</span></label>
                                                <input class="form-control @error('street_address') is-invalid @enderror" value="{{ old('street_address' ,$userDetails->street_address) }}" id="street_address" name="street_address" placeholder="Street ঠিকানা" type="text" required>
                                                @error('street_address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="city">Suburb/City <span class="text-danger">*</span></label>
                                                <input class="form-control @error('city') is-invalid @enderror" id="city" value="{{ old('city' ,$userDetails->city) }}" name="city" placeholder="Suburb/City" type="text" required>
                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="state">State <span class="text-danger">*</span></label>
                                                <select name="state" id="state" class="form-control select2" required>
                                                    <option value="">Select a State</option>
                                                    @if ( !empty($stateNameList))
                                                        @foreach ($stateNameList as $state)
                                                            <option {{ $userDetails->state == $state->id ? 'Selected':'' }} value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="postcode">Postcode <span class="text-danger">*</span></label>
                                                <input class="form-control @error('postcode') is-invalid @enderror" id="postcode" value="{{ old('postcode' ,$userDetails->postcode) }}" name="postcode" placeholder="Postcode" type="text" required>
                                                @error('postcode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="country">Country <span class="text-danger">*</span></label>
                                                <input class="form-control @error('country') is-invalid @enderror" value="{{ old('country' ,$userDetails->country) }}" id="country" name="country" placeholder="Country" type="text" required>
                                                @error('country')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="driver_licence_number">Driver Licence Number <span class="text-danger">*</span></label>
                                                <input class="form-control @error('driver_licence_number') is-invalid @enderror" id="driver_licence_number" value="{{ old('driver_licence_number' ,$userDetails->driver_licence_number) }}" name="driver_licence_number" placeholder="Driver Licence Number" type="text" required>
                                                @error('driver_licence_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="driver_licence_state">Driver Licence State <span class="text-danger">*</span></label>
                                                <select name="driver_licence_state" id="driver_licence_state" class="form-control select2" required>
                                                    <option value="">Select a Licence State</option>
                                                    @if ( !empty($driverStateNameList))
                                                        @foreach ($driverStateNameList as $d_state)
                                                            <option {{ $userDetails->driver_licence_state == $d_state->id ? 'Selected':'' }} value="{{ $d_state->id }}">{{ $d_state->state_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="driver_licence_expiry_date">Driver Licence Expiry তারিখ <span class="text-danger">*</span></label>
                                                <input class="form-control basic-datepicker @error('driver_licence_expiry_date') is-invalid @enderror" id="driver_licence_expiry_date"  value="{{ old('driver_licence_expiry_date' ,$userDetails->driver_licence_expiry_date) }}" name="driver_licence_expiry_date" placeholder="Driving licence expire date" type="date" required>
                                                @error('driver_licence_expiry_date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                @endif

                                <div class="form-group text-right">
                                    <input class="btn btn-danger" type="reset" value="Reset">
                                    <input class="btn btn-dark" type="submit" value="Update User">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sidebar-box">
                                <div class="card card-body text-xs-right">
                                    <label for="">User স্ট্যাটাস</label>
                                    <select name="status" id="" class="form-control select2">
                                        <option value="1" {{ $userDetails->status == 1 ? 'selected' : '' }}>সক্রিয়</option>
                                        <option value="2" {{ $userDetails->status == 2 ? 'selected' : '' }}>নিষ্ক্রিয়</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Project modal content -->
    <div id="password-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <h4 class="page-title">পাসওয়ার্ড আপডেট করুন</h4>
                    </div>

                    <form action="{{ route('user.password.update',['user' => $userDetails->id]) }}" class="px-3" method="POST" id="updateForm">
                        @csrf
                        <div class="form-group">
                            <label for="customer_id"> নতুন পাসওয়ার্ড</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="customer_id">পাসওয়ার্ড নিশ্চিত করুন</label>
                            <input type="password" name="password_confirmation" id="" class="form-control">
                        </div>

                        <div class="form-group text-right">
                            <button class="btn btn-danger" type="reset">Reset</button>
                            <button class="btn btn-dark" type="submit">পাসওয়ার্ড আপডেট করুন</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection


@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')

    {{-- <script src="{{ asset('public/admin-assets/assets/libs/flatpickr/flatpickr.min.js') }}"></script> --}}
    <script src="{{ asset('public/admin-assets/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Init js-->
    <script src="{{ asset('public/admin-assets/assets/js/pages/form-pickers.init.js') }}"></script>


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

    @error('password')
    <script>
        swal("Sorry!", `{{ $message }}`, "error");
    </script>
    @enderror

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
