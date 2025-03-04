<div class="row">
    <div class="col-12">
        <div class="card-box">
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
                                        <th>Transaction Type</th>
                                        <th class="text-center">অ্যাকশন </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ( !empty($reconciled_list) ) 
                                        @foreach ($reconciled_list as $key => $reconcile)
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
                            <div class="float-right">
                                <div class="mt-3">{{ $reconciled_list->links('pagination::bootstrap-4') }}</div>
                            </div>
                        </div>
                    </div><!-- end .table-rep-plugin-->
                </div><!-- end .responsive-table-plugin-->
            </div><!-- end card-box -->
        </div>
    </div><!-- end row-->
</div>
