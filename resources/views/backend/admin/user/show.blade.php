@extends('backend.layouts.app')
@section('title', ''.($global_setting->title ?? "").' | '.__('pages.View Employee Details'))
@section('content')







<div class="page-content">
    @include('backend.admin.partials.alert')
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                {{-- <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" /> --}}
            </div>
        </div>
        <div class="">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        <img src="{{asset('storage/userImages')}}/{{$employee->userInfo->image ?? '-'}}" alt="user-img" class="img-thumbnail" style="max-height: 120px;" />
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h2 class="text-white mb-1">{{$employee->name_en}}</h2>
                        <p class="text-white-75" style="font-size: 1.4em;">
                            {{ $employee->userInfo->designation->name ?? ''}}
                        </p>
                        {{-- <div class="hstack text-white-50 gap-1">
                            <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>California, United States</div>
                            <div>
                                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Themesbrand
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    {{-- <div class="d-flex">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-18 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">{{__('pages.Overview')}}</span>
                                </a>
                            </li>
                            
                            
                            
                        </ul>
                    </div> --}}
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-xxl-3">
                                    

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3" style="font-size: 1.5em; font-weight: 600;">{{__('pages.Info')}}</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0" scope="row">{{__('pages.Full Name')}}:</th>

                                                            <td class="text-muted">{{$employee->name_en}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0" scope="row">{{__('pages.Mobile')}}:</th>

                                                            <td class="text-muted">{{$employee->mobile}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0" scope="row">{{__('pages.Email')}}:</th>

                                                            <td class="text-muted">{{$employee->email}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="ps-0" scope="row">
                                                                <ul style="list-style: none; padding-left: 0;">
                                                                    <li class="nav-item">
                                                                        {{-- <a download="download" style="cursor:pointer;" href="{{route('admin.user.print_doc',$employee->id)}}"  class="btn btn-sm btn-success" >
                                                                            <i class="ri-list-unordered d-inline-block"></i> <span class="d-md-inline-block">{{__('pages.Print Document')}}</span>
                                                                        </a> --}}

                                                                        <a onclick="printDiv('overview-tab')" href="#"  class="btn btn-sm btn-success remove_from_print" >
                                                                            <i class="ri-list-unordered d-inline-block"></i> <span class="d-md-inline-block">{{__('pages.Print Document')}}</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </th>

                                                            <td class="text-muted"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                                <div class="col-xxl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3" style="font-size: 1.5em; font-weight: 600;">{{__('pages.About')}}</h5>
                                            <div class="row">
                                                {{-- <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__("pages.Father's Name")}}</label>

                                                    <p>{{ $employee->userInfo->f_name_en ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__("pages.Mother's Name")}}</label>

                                                    <p>{{ $employee->userInfo->m_name_en ?? '' }}</p>
                                                </div> --}}

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Date of Birth')}}: </label>

                                                    <p>{{ $employee->userInfo->dob ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Gender')}}: </label>

                                                    <p>{{ $employee->userInfo->gender ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Religion')}}: </label>

                                                    <p>{{ $employee->userInfo->religion ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Birth Certificate')}}:</label>

                                                    <p>{{ $employee->userInfo->birth_certificate_no ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.NID number')}}:</label>

                                                    <p>{{ $employee->userInfo->nid_no ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Passport Number')}}:</label>

                                                    <p>{{ $employee->userInfo->passport_no ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Marital Status')}}:</label>

                                                    <p>{{ $employee->userInfo->marital_status ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Mobile Number')}}:</label>

                                                    <p>{{ $employee->mobile }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Employee ID')}}:</label>

                                                    <p>{{ $employee->userInfo->employee_id ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Employee Role')}}:</label>

                                                    <p>{{ $employee->role->name_en ?? ''}}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Employee Department')}}:</label>

                                                    <p>{{ $employee->userInfo->department->name ?? ''}}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Employee Designation')}}:</label>

                                                    <p>{{ $employee->userInfo->designation->name ?? ''}}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Employee Office')}}:</label>

                                                    <p>{{ $employee->userInfo->office->name ?? ''}}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">Employee Category:</label>

                                                    <p>{{ $employee->categoryInfo->name ?? ''}}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">Team:</label>

                                                    <p>Team {{ $employee->team->name_en ?? '' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">Joining Date:</label>

                                                    <p>{{ $employee->userInfo->start ? date('d M, Y', strtotime($employee->userInfo->start ?? '')) : 'N/A' }}</p>
                                                </div>

                                                <div class="col-6 col-md-4">
                                                    <label for="" class="text-dark">{{__('pages.Signature')}}:</label>

                                                    <img style="max-width: 200px;" src="{{asset('storage/signature')}}/{{$employee->userInfo->signature ?? '-'}}" alt="">
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->
                                </div>

                                @if (count($docs) > 0)
                                        <div class="col-md-12 col-sm-12">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3" style="font-size: 1.5em; font-weight: 600;">Company Documents:</h5>

                                                        <div class="hidden_area">
                                                            <table class="table table-bordered table-sm text-left table-area">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Document Title</th>
                                                                        <th>Documents</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    @foreach ($docs as $doc)
                                                                        <tr>
                                                                            <td>
                                                                                {{ $doc->document_title }}
                                                                            </td>

                                                                            <td>
                                                                                <a href="{{ asset('storage/companyDocument') }}/{{ $doc->document }}" download="" target="#" rel="noopener noreferrer">Download</a>

                                                                                <button type="button" class="btn btn-info ml-4" data-bs-toggle="modal" data-bs-target="#viewDoc{{ $doc->id }}">View</button>

                                                                                <div class="modal fade" id="viewDoc{{ $doc->id }}" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title" id="exampleModalgridLabel">Document</h5>
                                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>

                                                                                            <div class="modal-body">
                                                                                                <div class="row g-3">
                                                                                                    <div class="col-12">
                                                                                                        <div>
                                                                                                            @if((pathinfo('storage/companyDocument/'.$doc->document, PATHINFO_EXTENSION) == 'png') || (pathinfo('storage/companyDocument/'.$doc->document, PATHINFO_EXTENSION) == 'jpg') || (pathinfo('storage/companyDocument/'.$doc->document, PATHINFO_EXTENSION) == 'jpeg') || (pathinfo('storage/companyDocument/'.$doc->document, PATHINFO_EXTENSION) == 'gif'))
                                                                                                                <img src="{{ asset('storage/companyDocument') }}/{{ $doc->document }}" style="max-width: 400px;"/>
                                                                                                            @elseif (pathinfo('storage/companyDocument/'.$doc->document, PATHINFO_EXTENSION) == 'pdf')
                                                                                                                <iframe src="{{ asset('storage/companyDocument') }}/{{ $doc->document }}" frameborder="0" style="width:100%; min-height:640px;"></iframe>
                                                                                                            @else
                                                                                                                <iframe src="https://view.officeapps.live.com/op/view.aspx?src={{ asset('storage/companyDocument') }}/{{ $doc->document }}" frameborder="0" style="width:100%;min-height:640px;"></iframe>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                            
                                                                                                    <div class="col-lg-12">
                                                                                                        <div class="hstack gap-2 justify-content-end">
                                                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                                                        </div>
                                                                                                    </div><!--end col-->
                                                                                                </div><!--end row-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr> 
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                <div class="col-xxl-12">

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3" style="font-size: 1.5em; font-weight: 600;">{{__('pages.Address')}}</h5>
                                            <div class="row">
                                                <div class="col-6 col-md-6">
                                                    <h5>{{__('pages.Present Address')}}</h5>
                                                    <label for="">{{__('pages.Division')}}</label>
                                                    <p>{{ $employee->userAddress->presentDivision->name ?? '' }}</p>
                                                    <label for="">{{__('pages.District')}}</label>
                                                    <p>{{ $employee->userAddress->presentDistrictName->name ?? '' }}</p>
                                                    <label for="">{{__('pages.Thana/Upazila')}}</label>
                                                    <p>{{ $employee->userAddress->presentUpazila->name ?? '' }}</p>
                                                    <label for="">{{__('pages.Post Office')}}</label>
                                                    <p>{{ $employee->userAddress->present_post_office ?? '' }}</p>
                                                    <label for="">{{__('pages.Post Code')}}</label>
                                                    <p>{{ $employee->userAddress->present_post_code ?? '' }}</p>
                                                    <label for="">{{__('pages.Village/Road')}}</label>
                                                    <p>{{ $employee->userAddress->present_address ?? '' }}</p>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    <h5>{{__('pages.Permanent Address')}}</h5>
                                                    <label for="">{{__('pages.Division')}}</label>
                                                    <p>{{ $employee->userAddress->permanentDivision->name ?? '' }}</p>
                                                    <label for="">{{__('pages.District')}}</label>
                                                    <p>{{ $employee->userAddress->permanentDistrict->name ?? '' }}</p>
                                                    <label for="">{{__('pages.Thana/Upazila')}}</label>
                                                    <p>{{ $employee->userAddress->permanentUpazila->name ?? '' }}</p>
                                                    <label for="">{{__('pages.Post Office')}}</label>
                                                    <p>{{ $employee->userAddress->permanent_post_office ?? '' }}</p>
                                                    <label for="">{{__('pages.Post Code')}}</label>
                                                    <p>{{ $employee->userAddress->permanent_post_code ?? '' }}</p>
                                                    <label for="">{{__('pages.Village/Road')}}</label>
                                                    <p>{{ $employee->userAddress->permanent_address ?? '' }}</p>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div><!-- end card -->

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-3">
                                                <div class="p-2"><h5 class="card-title mb-3" style="font-size: 1.5em; font-weight: 600;">{{__('pages.Educational information')}} </h5></div>
                                                <div class="p-2">
                                                    <span class="remove_from_print">
                                                        @can('add_educational_info')
                                                            <a href="{{route('admin.user.add_education', Crypt::encryptString($employee->id))}}" title="Add Education Info" class="btn btn-sm btn-success">+</a>
                                                        @endcan
                                                    </span>
                                                </div>
                                              </div>
                                            
                                            <div class="row">
                                                @foreach ($employee->academicRecordDatas->sortBy('academicExamInfo.sl') as $academicRecord)
                                                <div class="col-md-6">
                                                    <table class="table table-borderless">
                                                        <thead>
                                                          <tr>
                                                            <th colspan="2">
                                                                {{$academicRecord->name_en}}
                                                            </th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if ($academicRecord->roll)
                                                                <tr>
                                                                    <td>{{__('pages.Roll No')}}</td>
                                                                    <td>
                                                                        {{ $academicRecord->roll ?? ''}}
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->reg_no)
                                                                <tr>
                                                                    <td>{{__('pages.Registration No')}}</td>
                                                                    <td>
                                                                        {{$academicRecord->reg_no}}
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if ($academicRecord->pass_year)
                                                                <tr>
                                                                    <td>{{__('pages.Passing year')}}</td>
                                                                    <td>
                                                                        @for ($x = 1950; $x <= date('Y'); $x++)
                                                                            @if(($academicRecord->pass_year ?? 0) == $x) {{$x}} @endif
                                                                        @endfor
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->institute_id)
                                                                <tr>
                                                                    <td>{{__('pages.Institute')}}</td>
                                                                    <td>
                                                                        @if ($academicRecord->institute_id > 0)
                                                                            {{ $academicRecord->institute_name}}
                                                                        @else
                                                                            {{ $academicRecord->instituteInfo->name_en  ?? ''}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->institute_name and !$academicRecord->institute_id)
                                                                <tr>
                                                                    <td>{{__('pages.Institute')}}</td>
                                                                    <td>
                                                                        {{ $academicRecord->institute_name}}
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->exam_id)
                                                                <tr>
                                                                    <td>{{__('pages.Exam')}}</td>
                                                                    <td>
                                                                        @if ($academicRecord->exam_id == 0)
                                                                            {{ $academicRecord->exam_name}}
                                                                        @else
                                                                            {{ $academicRecord->examInfo->name_en  ?? ''}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if ($academicRecord->exam_name and (!$academicRecord->exam_id or $academicRecord->exam_id == 0))
                                                                <tr>
                                                                    <td>{{__('pages.Exam')}}</td>
                                                                    <td>
                                                                        {{ $academicRecord->exam_name}}
                                                                    </td>
                                                                </tr>
                                                            @endif


                                                            
                                                            @if ($academicRecord->board_id)
                                                                <tr>
                                                                    <td>{{__('pages.Board')}}</td>
                                                                    <td>
                                                                        @if ($academicRecord->board_id == 0)
                                                                            {{ $academicRecord->board_name}}
                                                                        @else
                                                                            {{ $academicRecord->boardInfo->name_en  ?? ''}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if ($academicRecord->board_name and (!$academicRecord->board_id or $academicRecord->board_id == 0))
                                                                <tr>
                                                                    <td>{{__('pages.Board')}}</td>
                                                                    <td>
                                                                        {{ $academicRecord->board_name}}
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->subject_id)
                                                                <tr>
                                                                    <td>{{__('pages.Subject')}}</td>
                                                                    <td>
                                                                        @if ($academicRecord->subject_id == 0)
                                                                            {{ $academicRecord->subject_name}}
                                                                        @else
                                                                            {{ $academicRecord->subjectInfo->name_en  ?? ''}}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->result_type)
                                                                <tr>
                                                                    <td>{{__('pages.Result Type')}}</td>
                                                                    <td>
                                                                        @foreach (result_types() as $index => $result_types)
                                                                            @if(($academicRecord->result_type ?? 0) == $index) {{$result_types}} @endif
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->result_type and in_array($academicRecord->result_type, [5,6]))
                                                                <tr>
                                                                    <td>{{__('pages.Result')}}</td>
                                                                    <td>
                                                                        {{$academicRecord->result ?? ''}}
                                                                    </td>
                                                                </tr>
                                                            @endif

                                                            @if ($academicRecord->duration_id)
                                                                <tr>
                                                                    <td>{{__('pages.Duration')}}</td>
                                                                    <td>
                                                                        {{ $academicRecord->durationInfo->name_en  ?? ''}}
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            
                                                            @if ($academicRecord->certificate_file)
                                                                <tr>
                                                                    <td>Certificate File</td>
                                                                    <td>
                                                                        <a class="btn btn-sm btn-success" target="_blank" href="{{asset('storage/certificate_file')}}/{{ $academicRecord->certificate_file}}">View</a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                          
                                                        </tbody>
                                                      </table>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end card-body-->
                                    </div>


                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        
                        
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div>
@endsection

@push('script')
    <script>
        // $('[href*="{{ $menu_expand }}"]').addClass('active');
        $('[href*="{{ $menu_expand }}"]').closest('.menu-dropdown').addClass('show');
        $('[href*="{{ $menu_expand }}"]').closest('.menu-dropdown').parent().find('.nav-link').attr('aria-expanded', 'true');
        $('[href*="{{ $menu_expand }}"]').closest('.first-dropdown').find('.menu-link').attr('aria-expanded', 'true');
        $('[href*="{{ $menu_expand }}"]').closest('.first-dropdown').find('.menu-dropdown:first').addClass('show');
       
        function printDiv(divName) {
            $('div').removeClass('table-responsive');
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

    <script>
        $('#SwitchCheck11').click(function(){
            if($(this).prop("checked") == true){
                $("#retire_date_box").css("display", "block");
                $("#retire_date_box").prop('required',true);
            }else if($(this).prop("checked") == false){
                $("#retire_date_box").css("display", "none");
                $("#retire_date_box").prop('required',false);
            }
        });
    </script>
@endpush

@push('css')
    <style>
        .img-thumbnail {
            max-height: 85px;
        }
        
        @media print
{    
    .remove_from_print
    {
        display: none !important;
    }
}
    </style>
@endpush