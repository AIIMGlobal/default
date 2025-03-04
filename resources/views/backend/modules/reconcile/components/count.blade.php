<div class="row mt-100">
    <div class="col-md-6 col-xl-3">
        <a href="{{ route('transactions.all') }}">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-primary">
                            <i class="fe-tag font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $all_count }}</span></h3>
                            <p class="text-muted mb-1 transactions.alltransactions.alltext-truncate">All Transactions</p>
                        </div>
                    </div>
                </div><!-- end row-->
            </div><!-- end widget-rounded-circle-->
        </a>
    </div><!-- end col-->
    <div class="col-md-6 col-xl-3">
        <a href="{{ route('transactions.unreconciled') }}">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-warning">
                            <i class="fe-clock font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $unreconciled_count }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Unreconciled Transactions</p>
                        </div>
                    </div>
                </div><!-- end row-->
            </div><!-- end widget-rounded-circle-->
        </a>
    </div><!-- end col-->

    <div class="col-md-6 col-xl-3">
        <a href="{{ route('transactions.reconciled') }}">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-success">
                            <i class="fe-check-circle font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $reconciled_count }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Reconciled Transactions</p>
                        </div>
                    </div>
                </div><!-- end row-->
            </div><!-- end widget-rounded-circle-->
        </a>
        
    </div><!-- end col-->

    <div class="col-md-6 col-xl-3">
        <a href="{{ route('transactions.declined.list') }}">
            <div class="widget-rounded-circle card-box">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-danger">
                            <i class="fe-check-circle font-22 avatar-title text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ $declined_count }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Declined Transactions</p>
                        </div>
                    </div>
                </div><!-- end row-->
            </div><!-- end widget-rounded-circle-->
        </a>
    </div><!-- end col-->
</div>