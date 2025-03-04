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


        <div class="row mt-100">
            <div class="col-12">
                <div class="card-box">
                    <div class="text-right">
                        <a href="#" class="btn btn-dark mb-2">All unreconciled Transactions</a>
                    </div>

                    <div class="responsive-table-plugin">
                        <div class="table-wrapper">
                            <div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table table-bordered" id="dtable">
                                        <thead>
                                            <tr>
                                                <th>Account Number</th>
                                                <th>তারিখ</th>
                                                <th>Amount</th>
                                                <th>Transaction Category</th>
                                                <th>Transaction টাইপ</th>
                                                <th class="text-center">অ্যাকশন </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ( !empty($unreconciled_list) )
                                                @foreach ($unreconciled_list as $key => $reconcile)
                                                    <tr class="odd" role="row">
                                                        <td>{{ $reconcile->getAccount->account_number }}</td>
                                                        <td>{{ date('d/m/Y', strtotime($reconcile->tr_issue_date)) }}</td>
                                                        <td>${{ $reconcile->ledger_type == 1 ? number_format( $reconcile->credit,2) : number_format ( $reconcile->debit,2) }}</td>
                                                        <td>{{ $reconcile->ledger_type == 1 ? "Credit" : "Debit" }}</td>
                                                        <td>{{ $reconcile->getTransactionType->type_name }}</td>
                                                        <td class="text-center">
                                                            @if ($reconcile->status == 1)
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-success" onclick="return showApprovedModal(`{{ route('transactions.approved',['id'=>$reconcile->id]) }}`)">Approve</a>
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="return showDeclineddModal(`{{ route('transactions.declined',['id'=>$reconcile->id]) }}`)">Decline</a>
                                                            @elseif( $reconcile->status == 3)
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-danger">Declined</a>
                                                            @else
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-success">Approved</a>
                                                            @endif
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-info"  onclick="return updateItem(`{{ route('transaction.update',$reconcile->id) }}`,`{{ $reconcile->debit }}`,`{{ $reconcile->credit }}`,`{{ $reconcile->tr_issue_date }}`,`{{ $reconcile->ledger_type }}`,`{{ $reconcile->transaction_type }}`,`{{ $reconcile->account_id }}`)">সম্পাদনা</a>

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


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="text-right">
                        <a href="#" class="btn btn-dark mb-2">All অসম্পূর্ণ Payway Payments</a>
                    </div>
                    <div class="responsive-table-plugin">
                        <div class="table-wrapper">
                            <div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table table-bordered" id="dtable">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Transaction তারিখ</th>
                                                <th>Payway Customer Number</th>
                                                <th>Currency</th>
                                                <th>Amount</th>
                                                <th>Surcharge</th>
                                                <th>Amount with Surcharge</th>
                                                <th>Payway স্ট্যাটাস</th>
                                                <th>OBS স্ট্যাটাস</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ( !blank($transactionList) )
                                                @foreach ($transactionList as $key => $transaction)
                                                    <tr class="odd" role="row">
                                                        <td>{{ $transaction->transactionId }}</td>
                                                        <td>{{ date('d/m/Y', strtotime($transaction->settlementDate)) }}</td>
                                                        <td>{{ $transaction->customerNumber }}</td>
                                                        <td>{{ $transaction->currency }}</td>
                                                        <td>{{ $transaction->paywayInfo->transaction_amount }}</td>
                                                        <td>{{ $transaction->paymentAmount - $transaction->paywayInfo->transaction_amount }}</td>
                                                        <td>{{ $transaction->paymentAmount }}</td>
                                                        <td>{{ $transaction->status }}</td>
                                                        <td>{{ $transaction->status == 'approved*' ? 'Waiting for payway approval' : 'Unreconciled' }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table><!-- end .table-responsive -->
                                </div>
                            </div><!-- end .table@else
                                                <tr class="odd" role="row">
                                                    <td class="sorting_1" tabindex="0"><b>kj</b></td>
                                                </tr>-rep-plugin-->
                        </div><!-- end .responsive-table-plugin-->
                    </div><!-- end card-box -->
                </div>
            </div><!-- end row-->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="text-right">
                        <a href="#" class="btn btn-dark mb-2">All অসম্পূর্ণ Payments</a>
                    </div>
                    <div class="responsive-table-plugin">
                        <div class="table-wrapper">
                            <div class="table-rep-plugin fixed-solution" data-pattern="priority-columns">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table class="table table-bordered" id="dtable">
                                        <thead>
                                            <tr>
                                                <th>Payment to</th>
                                                <th>Preferred তারিখ</th>
                                                <th>Amount</th>
                                                <th>Bank</th>
                                                <th>Account নাম</th>
                                                <th>BSB</th>
                                                <th>Account Number</th>
                                                <th class="text-center" width="15%">অ্যাকশন </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ( !empty($paymentRequestList) && count($paymentRequestList) > 0)
                                                @foreach ($paymentRequestList as $key => $payment)
                                                    <tr class="odd" role="row">
                                                        <td class="sorting_1" tabindex="0">{{ getAccountDetailsById($payment->payment_to)->getAccountType->type_name.'-'.getAccountDetailsById($payment->payment_to)->account_number }}</td>
                                                        <td>
                                                            {{$payment->created_at->format('d-m-Y')}}
                                                        </td>
                                                        <td>${{ number_format($payment->amount,2) }}</td>
                                                        <td>{{ $payment->bank }}</td>
                                                        <td>{{ $payment->account_name }}</td>
                                                        <td>{{ $payment->bsb }}</td>
                                                        <td>{{ $payment->account_number }}</td>
                                                        <td class="text-center">
                                                            @if ( $payment->status == 2 )
                                                                <a href="{{ route('payment.request.approved',['prequest' => $payment->id]) }}" class="btn btn-info">Approve</a>
                                                                <a href="{{ route('payment.request.decline',['prequest' => $payment->id]) }}" class="btn btn-danger">Decline</a>
                                                            @elseif ( $payment->status == 3 )
                                                                <a href="" class="btn btn-danger">Declined</a>
                                                            @else
                                                                <a href="javascript:void(0)" class="btn btn-success">Completed</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else

                                                <tr class="odd" role="row">
                                                    <td colspan="9" class="text-center"><b>No more pending payment requests</b></td>
                                                </tr>

                                            @endif
                                        </tbody>
                                    </table><!-- end .table-responsive -->
                                </div>
                            </div><!-- end .table@else
                                                <tr class="odd" role="row">
                                                    <td class="sorting_1" tabindex="0"><b>kj</b></td>
                                                </tr>-rep-plugin-->
                        </div><!-- end .responsive-table-plugin-->
                    </div><!-- end card-box -->
                </div>
            </div><!-- end row-->
        </div>


    </div>



    @include('backend.modules.reconcile.components.modals.approved')
    @include('backend.modules.reconcile.components.modals.declined')

    @include('backend.components.delete-modal')
@endsection

@push('plugins')
    <script src="{{ asset('public/admin-assets/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('public/admin-assets/assets/js/pages/dashboard-2.init.js') }}"></script>

    <script>
        function deleteItem(routeUrl) {
            let actionData = document.getElementById("deleteForm").action = routeUrl
            $('#delete-item').modal('show')
        }

        function showApprovedModal(routeUrl) {
            let actionData = document.getElementById("approvedForm").action = routeUrl
            $('#approved-item').modal('show')
        }





    </script>

    @if(session()->has('FlsMsg'))
    <script>
        swal("Good job!", `{!! session('FlsMsg') !!}`, "success");
    </script>
    @endif
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
