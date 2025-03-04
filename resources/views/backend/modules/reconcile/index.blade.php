@extends('layouts.backend.master')

@section('title','OBS - All Transactions')

@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">All Transactions</h4>
                </div>
            </div>
        </div><!-- end page title -->

        @include('backend.modules.reconcile.components.count')

        {{-- Start of Reconciled List --}}
        <div id="get-dynamic-reconcile">
            @include('backend.modules.reconcile.components.reconcile-list')
        </div>
        {{-- End of Reconciled List --}}


        <!-- Update Project modal content -->
        <div id="update-transaction-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center mt-2 mb-4">
                            <h4 class="page-title">Update Transaction</h4>
                        </div>

                        <form action="" class="px-3" id="updateForm" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="project_name">Transaction Amount</label>
                                <input type="number" name="transaction_amount" id="update_transaction_amount" class="form-control" step="0.01">
                                @error('transaction_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <input type="hidden" name="account_id" id="account_id_update">

                            <div class="form-group">
                                <label for="ladger_type">Ledger টাইপ</label>
                                <select name="ledger_type" id="ledger_type_update" class="form-control select2updated" style="width: 100%;">
                                    <option value="1">Credit</option>
                                    <option value="2">Debit</option>
                                </select>
                                @error('ladger_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="transaction_date">Transaction তারিখ</label>
                                <input type="date" name="transaction_date" id="transaction_date_update" class="form-control">
                                @error('transaction_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="title">Select Transaction টাইপ <span class="text-danger">*</span></label>
                                <select name="transaction_type" id="account_type_update" class="form-control select2update" style="width: 100%;">
                                </select>
                                @error('account_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group text-right">
                                <button class="btn btn-dark" type="submit">Update Transaction</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        @include('backend.modules.reconcile.components.modals.approved')
        @include('backend.modules.reconcile.components.modals.declined')
@endsection
@include('backend.components.datatable')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #323a46 !important;
            }
    </style>
@endpush


@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        function showApprovedModal(routeUrl) {
            let actionData = document.getElementById("approvedForm").action = routeUrl
            $('#approved-item').modal('show')
        }


        function showDeclineddModal(routeUrl) {
            let actionData = document.getElementById("declinedForm").action = routeUrl
            $('#declined-item').modal('show')
        }



        function updateItem(routeUrl,debit,credit,issueDate,ledgerType,tr_type,account_id) {
            // alert(projectName)
            document.getElementById("updateForm").action = routeUrl

            let amount = ledgerType == 1 ? credit : debit

            let ledgerTypeData =    `<option value="1" ${ ledgerType == 1 ? 'selected' : '' }>Credit</option>
                                <option value="2" ${ ledgerType == 2 ? 'selected' : '' }>Debit</option>`


            let trtypelist = `<?php echo json_encode($transactionTypeList);?>`
            let transactionTypeList = JSON.parse(trtypelist)
            let tr_lenght = transactionTypeList.length

            let trList = ''
            for (let i = 0; i < tr_lenght; i++) {
                trList += `<option value="${transactionTypeList[i].id}" ${tr_type==transactionTypeList[i].id?'selected':''}>${transactionTypeList[i].type_name}</option>`

            }
            document.getElementById('update_transaction_amount').value = amount
            document.getElementById('ledger_type_update').innerHTML = ledgerTypeData
            document.getElementById('transaction_date_update').value = issueDate
            document.getElementById('account_id_update').value = account_id
            document.getElementById('account_type_update').innerHTML = trList

            $('#update-transaction-modal').modal('show')
        }

        // Select 2 initialization
        $(document).ready(function() {
            $('.select2update').select2({
                dropdownParent: $("#update-transaction-modal")
            })

        })





        /*******Start load data using ajax request********/
            $(document).ready(function(){
                $(document).on('click', '.pagination a', function(event) {
                    event.preventDefault();
                    let page = $(this).attr('href').split('page=')[1];
                    getMoreUsers(page);
                });
            });


            function getMoreUsers(page) {

                // let selectedGender = $('#gender option:selected').val();
                // let selectedReligion = $('#religion option:selected').val();

                $.ajax({
                    type: 'GET',
                    data: {
                        // 'gender': selectedGender,
                        // 'religion': selectedReligion,
                    },
                    url: "{{ route('get-more-reconcile-unrecncile') }}" + "?page="+page,
                    success:function(data){
                        $('#get-dynamic-reconcile').html(data);
                    }
                })
            }



        /*******End load data using ajax request********/





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
        div#dtable_length label {
            margin-left: 15px;
        }
        div#dtable_paginate {
                display: none;
            }
        div#dtable_info {display: none;}
    </style>
@endpush
