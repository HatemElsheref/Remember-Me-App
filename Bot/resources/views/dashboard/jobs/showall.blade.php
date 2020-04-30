@extends('dashboard.layout.app')


@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div>
                    <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">ALL JOBS</small></h1>


                </div>
            </div>
<div class="row">

    @forelse($jobs as $job)
        <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                        <h6 class="m-0 font-weight-bold text-primary">
                            @if($job->status)
                                <i class="fa fa-circle text-success"></i>
                            @else
                                <i class="fa fa-circle text-danger"></i>
                            @endif
                            {{$job->department}}
                        </h6>

                        <div class="dropdown no-arrow ">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Job Setting:</div>
                                <form id="remove-job-{{$job->id}}" action="{{route('job.destroy',$job->id)}}" method="post">@csrf @method('delete')</form>
                                <form id="status-job-{{$job->id}}" action="{{route('job.status',$job->id)}}" method="post">@csrf</form>
                                <a class="dropdown-item" href="#" onclick="document.getElementById('status-job-{{$job->id}}').submit();return false;">Status</a>
                                <a class="dropdown-item" href="{{route('job.edit.daily',$job->id)}}">Edit</a>
                                <a class="dropdown-item" href="#" onclick="document.getElementById('remove-job-{{$job->id}}').submit();return false;">Delete</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('job.details',$job->id)}}">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    @if($job->type=='annual')
                                        <i class="fa fa-circle text-primary"></i> In:{{date('M-d-Y',strtotime($job->in))}}
                                    @else
                                        FROM:{{date('M-d-Y',strtotime($job->from))}} <i class="fa fa-circle text-primary"></i> TO:{{date('M-d-Y',strtotime($job->to))}}
                                    @endif
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$job->title}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-xl-3 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                        <h6 class="m-0 font-weight-bold text-danger"style="padding-left:10px">No jobs Founded</h6>
                    </div>
                </div>
            </div>
        @endforelse



</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
    @endsection
