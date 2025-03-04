<div class="row mt-100">
    <div class="col-lg-6 col-xl-3">
        <a href="{{ route('admin.users') }}">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-blue rounded">
                            <i class="fe-users avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $userCount['admin_user'] ?? 0 }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Administrators</p>
                        </div>
                    </div>
                </div>
            </div><!-- end card-box-->
        </a>
    </div><!-- end col -->
    <div class="col-lg-6 col-xl-3">
        <a href="{{ route('staff.users') }}">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-warning rounded">
                            <i class="fe-users avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $userCount['staff_user'] ?? 0 }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Staff</p>
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
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $userCount['active_customer'] ?? 0 }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Customers</p>
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
                            <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $userCount['suspend_customer'] ?? 0 }}</span></h3>
                            <p class="text-muted mb-0 text-truncate">Suspended</p>
                        </div>
                    </div>
                </div>
            </div><!-- end card-box-->
        </a>
    </div><!-- end col -->
    
</div>