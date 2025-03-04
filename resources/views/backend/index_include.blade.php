<div class="col-xl-12">
    <h4>Welcome to {{ $global_setting->title }} Dashboard!</h4>

    <div class="row mt-4">
        @can('employee_count')
            <div class="col-xl-3 col-md-6">
                <a href="{{ route('admin.user.index') }}">
                    <div class="card card-animate bg-success card-height-100" style="height: 150px; padding-top: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                        <i class="bx bx-user"></i>
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-white mb-3">Total Employees</p>

                                    <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{ $employeesCount ?? 0 }}">{{ $employeesCount ?? 0 }}</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div> <!-- end col-->
        @endcan

        @can('client_count')
            <div class="col-xl-3 col-md-6">
                <a href="{{ route('admin.user.client_list') }}">
                    <div class="card card-animate bg-primary card-height-100" style="height: 150px; padding-top: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                        <i class="bx bx-user"></i>
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-white mb-3">Total Clients</p>

                                    <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{ $clientsCount ?? 0 }}">{{ $clientsCount ?? 0 }}</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div> <!-- end col-->
        @endcan

        @can('project_count')
            <div class="col-xl-3 col-md-6">
                <a href="{{ route('admin.project.index') }}">
                    <div class="card card-animate bg-danger card-height-100" style="height: 150px; padding-top: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                        <i class="bx bx-task"></i>
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-white mb-3">Total Projects</p>

                                    <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{ $projectsCount ?? 0 }}">{{ $projectsCount ?? 0 }}</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div> <!-- end col-->
        @endcan

        @can('document_count')
            <div class="col-xl-3 col-md-6">
                <a href="{{ route('admin.document.index') }}">
                    <div class="card card-animate bg-info card-height-100" style="height: 150px; padding-top: 20px;">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-light text-white rounded-2 fs-2">
                                        <i class="bx bx-file"></i>
                                    </span>
                                </div>

                                <div class="flex-grow-1 ms-3">
                                    <p class="text-uppercase fw-medium text-white mb-3">Total Documents</p>

                                    <h4 class="fs-4 mb-3 text-white"><span class="counter-value" data-target="{{ $documentsCount ?? 0 }}">{{ $documentsCount ?? 0 }}</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div>
                </a>
            </div> <!-- end col-->
        @endcan
    </div>

    <div class="row">
        @can('project_summary_graph')
            <div class="col-md-12">
                <div class="card card-height-100" style="background: linear-gradient(45deg,#346c341c,#0000ff17);">
                    <div class="card-header border-0 align-items-center">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-2 col-sm-6">
                                    <div class="search-box">
                                        <h4 class="card-title mb-0">Project Summary</h4>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-sm-6">
                                    <div class="search-box">
                                        <input @if(isset($_GET['from_date']) and $_GET['from_date']!='') value="{{$_GET['from_date']}}" @endif type="date" class="form-control search" name="from_date" placeholder="From Date">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-sm-6">
                                    <div class="search-box">
                                        <input @if(isset($_GET['to_date']) and $_GET['to_date']!='') value="{{$_GET['to_date']}}" @endif type="date" class="form-control search" name="to_date" placeholder="To Date">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>

                                <div class="col-xxl-1 col-sm-4">
                                    <div>
                                        <button style="max-width: 150px;" type="submit" class="btn btn-primary w-100"> 
                                            <i class="ri-equalizer-fill me-1 align-bottom"></i>Filter
                                        </button>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <a style="max-width: 150px;" href="{{ route('admin.home') }}" class="btn btn-danger w-100"> 
                                            <i class="ri-restart-line me-1 align-bottom"></i>Reset
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body p-0 pb-2">
                        <div>
                            <div id="chartColumn" class="apex-charts" dir="ltr" style="background: #f3f6f9;"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        @endcan

        @can('active_dashboard_project_list')
            <div class="col-md-12">
                <div class="card card-height-100">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title flex-grow-1 mb-0">Active Projects</h4>

                        {{-- <div class="flex-shrink-0">
                            <a href="javascript:void(0);" class="btn btn-soft-info btn-sm">Export Report</a>
                        </div> --}}
                    </div><!-- end cardheader -->

                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table table-nowrap table-centered align-middle">
                                <thead class="bg-light text-muted">
                                    <tr>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Project Lead</th>
                                        <th scope="col">Client Name</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                    </tr><!-- end tr -->
                                </thead><!-- thead -->

                                <tbody>
                                    @if (count($latestProjects) > 0)
                                        @foreach ($latestProjects as $latestProject)
                                            <tr>
                                                <td class="fw-medium">{{ $latestProject->name }}</td>
                                                <td class="fw-medium">{{ $latestProject->pm->name_en ?? '' }}</td>
                                                <td class="fw-medium">{{ $latestProject->client->name_en ?? '' }}</td>
                                                <td class="text-muted">{{ date('d M, Y', strtotime($latestProject->end_date)) }}</td>
                                                
                                                <td>
                                                    @if ($latestProject->status == 3)
                                                        <span class="badge badge-soft-danger">Completed</span>
                                                    @elseif ($latestProject->status == 1)
                                                        <span class="badge badge-soft-primary">On Going</span>
                                                    @elseif ($latestProject->status == 2)
                                                        <span class="badge badge-soft-danger">Canceled</span>
                                                    @else
                                                        <span class="badge badge-soft-warning">Pending</span>
                                                    @endif
                                                </td>
                                                
                                            </tr><!-- end tr -->
                                        @endforeach

                                        <tr>
                                            <td colspan="5" style="text-align: center;"><a href="{{ route('admin.project.index') }}" class="btn btn-primary">View All Projects</a></td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="5">No record found!</td>
                                        </tr>
                                    @endif
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        @endcan
    </div>
</div>

@push('script')
    <script>
        var options = {
            series: [{
            data: [@foreach($projects as $project) {{ $project->amount }},  @endforeach]
        }],
        chart: {
            height: 350,
            type: 'bar',
            events: {
                click: function(chart, w, e) {
                // console.log(chart, w, e)
                }
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '10%',
                distributed: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false
        },
        xaxis: {
            categories: [
                @foreach($projects as $project) 
                    ['{!! Str::limit($project->name, 20, " ...") !!}'],  
                @endforeach
            ],
            labels: {
                style: {
                    fontSize: '12px'
                }
            }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartColumn"), options);
        chart.render();
    </script>
@endpush