@extends('layouts.backend.master')
@section('title','Admin ড্যাশবোর্ড')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">{{__('messages.Dashboard')}}</h4>
                </div>
            </div>
        </div><!-- end page title -->


        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <a href="{{ route('customer.users') }}">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-blue rounded">
                                    <i class="fe-users avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $customerCount['total_customer'] ?? 0 }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Total Customers</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-box-->
                </a>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <a href="{{ route('customer.users.active') }}">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-success rounded">
                                    <i class="fe-user-check avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $customerCount['active_customer'] ?? 0 }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Active Customers</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-box-->
                </a>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <a href="{{ route('customer.users.suspend') }}">
                    <div class="card-box bg-pattern">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-md bg-danger rounded">
                                    <i class="fe-user-x avatar-title font-22 text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $customerCount['suspend_customer'] ?? 0 }}</span></h3>
                                    <p class="text-muted mb-0 text-truncate">Suspend Customers</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-box-->
                </a>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <div class="card-box bg-pattern">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-md bg-warning rounded">
                                <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark my-1">$<span data-plugin="counterup">256</span></h3>
                                <p class="text-muted mb-0 text-truncate">All Transactions Amount</p>
                            </div>
                        </div>
                    </div>
                </div><!-- end card-box-->
            </div><!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box widget-inline">
                    <div class="row">
                        <div class="col-sm-3 col-xl-3">
                            <a href="{{ route('payment.request') }}">
                                <div class="p-2 text-center">
                                    {{-- <i class="mdi mdi-cart-plus text-primary mdi-24px"></i> --}}
                                    <h3><span data-plugin="counterup">{{ $customerCount['payment_request'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Payment Requests</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3 col-xl-3">
                            <a href="{{ route('pending.payment.request') }}">
                                <div class="p-2 text-center">
                                    {{-- <i class="mdi mdi-currency-usd text-success mdi-24px"></i> --}}
                                    <h3><span data-plugin="counterup">{{ $customerCount['pending_payment_request'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">অসম্পূর্ণ Payment Requests</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <a href="{{ route('withdrawal.request') }}">
                                <div class="p-2 text-center">
                                    {{-- <i class="mdi mdi-currency-usd text-success mdi-24px"></i> --}}
                                    <h3><span data-plugin="counterup">{{ $customerCount['withdrawal_request'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Withdrawal Requests</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <a href="{{ route('pending.withdrawal.request') }}">
                                <div class="p-2 text-center">
                                    {{-- <i class="mdi mdi-currency-usd text-success mdi-24px"></i> --}}
                                    <h3><span data-plugin="counterup">{{ $customerCount['pending_withdrawal_request'] }}</span></h3>
                                    <p class="text-muted font-15 mb-0">অসম্পূর্ণ Withdrawal Requests</p>
                                </div>
                            </a>
                        </div>


                    </div><!-- end row -->
                </div><!-- end card-box-->
            </div><!-- end col-->
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <a href="{{ route('admin.tickets') }}">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-primary">
                                    <i class="fe-tag font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $customerCount['totalSecure'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total SecureMail</p>
                                </div>
                            </div>
                        </div><!-- end row-->
                    </div><!-- end widget-rounded-circle-->
                </a>
            </div><!-- end col-->
            <div class="col-md-6 col-xl-3">
                <a href="{{ route('admin.tickets.pending') }}">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-warning">
                                    <i class="fe-clock font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $customerCount['pendingSecure'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">অসম্পূর্ণ SecureMail</p>
                                </div>
                            </div>
                        </div><!-- end row-->
                    </div><!-- end widget-rounded-circle-->
                </a>
            </div><!-- end col-->
            <div class="col-md-6 col-xl-3">
                <a href="{{ route('admin.tickets.answered') }}">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-success">
                                    <i class="fe-check-circle font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $customerCount['answeredSecure'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Answered SecureMail</p>
                                </div>
                            </div>
                        </div><!-- end row-->
                    </div><!-- end widget-rounded-circle-->
                </a>

            </div><!-- end col-->
            <div class="col-md-6 col-xl-3">
                <a href="{{ route('admin.tickets.closed') }}">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-danger">
                                    <i class="fe-trash-2 font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $customerCount['closedSecure'] }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Closed SecureMail</p>
                                </div>
                            </div>
                        </div><!-- end row-->
                    </div><!-- end widget-rounded-circle-->
                </a>
            </div><!-- end col-->
        </div>
    </div>
@endsection

@push('plugins')
    <script src="{{ asset('public/admin-assets/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/admin-assets/assets/js/pages/dashboard-2.init.js') }}"></script>
@endpush
