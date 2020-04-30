
@extends('dashboard.layout.app')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary pull-left">List Of ALL Annual Jobs</h6>
                    <a href="{{route('job.create.annual')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add New Annual Job</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Job Id</th>
                                <th>Job Title</th>
                                <th>Status</th>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Controllers</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Job Id</th>
                                <th>Job Title</th>
                                <th>Status</th>
                                <th>Class</th>
                                <th>Date</th>
                                <th>Controllers</th>
                            </tr>
                            </tfoot>
                            <tbody>
                               @forelse($annualJobs as $job)
                                   <tr>
                                       <td>{{$job->id}}</td>
                                       <td>{{$job->title}}</td>
                                       <td>
                                           @if($job->status)
                                           <span class="badge badge-success">ON</span>
                                           @else
                                           <span class="badge badge-danger">OFF</span>
                                           @endif
                                       </td>
                                       <td>{{$job->department}}</td>
                                       <td>{{date_format(date_create($job->in),'Y-m-l')}}</td>
                                       <form id="remove-job-{{$job->id}}" action="{{route('job.destroy',$job->id)}}" method="post">@csrf @method('delete')</form>
                                       <form id="status-job-{{$job->id}}" action="{{route('job.status',$job->id)}}" method="post">@csrf</form>
                                       <td>
                                           <a href="{{route('job.edit.annual',$job->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt "></i> </a>
                                           <button  onclick="document.getElementById('remove-job-{{$job->id}}').submit();return false;"  class="btn btn-danger btn-sm"><i class="fas fa-trash "></i> </button>
                                           <a href="{{route('job.details',$job->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye "></i> </a>
                                           <button  onclick="document.getElementById('status-job-{{$job->id}}').submit();return false;"  class="btn btn-dark btn-sm"><i class="fas fa-arrow-right"></i> </button>
                                       </td>
                                   </tr>
                                      @empty
                                   <tr>
                                       <td colspan="5">
                                            No Annual Jobs Founded.
                                       </td>
                                   </tr>
                                   @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary pull-left">List Of ALL Daily Jobs</h6>
                    <a href="{{route('job.create.daily')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add New Daily Job</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Job Id</th>
                                <th>Job Title</th>
                                <th>Status</th>
                                <th>Class</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Time</th>
                                <th>Controllers</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Job Id</th>
                                <th>Job Title</th>
                                <th>Status</th>
                                <th>Class</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Time</th>
                                <th>Controllers</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @forelse($dailyJobs as $job)
                                <tr>
                                    <td>{{$job->id}}</td>
                                    <td>{{$job->title}}</td>
                                    <td>
                                        @if($job->status)
                                            <span class="badge badge-success">ON</span>
                                        @else
                                            <span class="badge badge-danger">OFF</span>
                                        @endif
                                    </td>
                                    <td>{{$job->department}}</td>
                                    <td>{{date_format(date_create($job->from),'Y-m-l')}}</td>
                                    <td>{{date_format(date_create($job->to),'Y-m-l')}}</td>
                                    <td>{{$job->time}}</td>
                                    <form id="remove-job-{{$job->id}}" action="{{route('job.destroy',$job->id)}}" method="post">@csrf @method('delete')</form>
                                    <form id="status-job-{{$job->id}}" action="{{route('job.status',$job->id)}}" method="post">@csrf</form>
                                    <td>
                                        <a href="{{route('job.edit.daily',$job->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt "></i> </a>
                                        <button  onclick="document.getElementById('remove-job-{{$job->id}}').submit();return false;"  class="btn btn-danger btn-sm"><i class="fas fa-trash "></i> </button>
                                        <a href="{{route('job.details',$job->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye "></i> </a>
                                        <button  onclick="document.getElementById('status-job-{{$job->id}}').submit();return false;"  class="btn btn-dark btn-sm"><i class="fas fa-arrow-right"></i> </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        No Annual Jobs Founded.
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection

