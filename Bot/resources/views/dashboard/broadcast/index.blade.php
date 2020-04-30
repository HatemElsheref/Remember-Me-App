
@extends('dashboard.layout.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 ">
                <h6 class="m-0 font-weight-bold text-primary pull-left">List Of ALL Broadcast Jobs</h6>
                <a href="{{route('broadcast.create')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Add New Broadcast Job</a>
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
                        @forelse($broadcast as $job)
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
                                <form id="remove-job-{{$job->id}}" action="{{route('broadcast.destroy',$job->id)}}" method="post">@csrf @method('delete')</form>
                                <form id="status-job-{{$job->id}}" action="{{route('broadcast.status',$job->id)}}" method="post">@csrf</form>
                                <form id="broadcast-job-{{$job->id}}" action="{{route('broadcast.broadcast',$job->id)}}" method="post">@csrf</form>
                                <td>
                                    <a href="{{route('broadcast.edit',$job->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt "></i> </a>
                                    <button  onclick="document.getElementById('remove-job-{{$job->id}}').submit();return false;"  class="btn btn-danger btn-sm"><i class="fas fa-trash "></i> </button>
                                    <a href="{{route('broadcast.show',$job->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye "></i> </a>
                                    <button  onclick="document.getElementById('status-job-{{$job->id}}').submit();return false;"  class="btn btn-dark btn-sm"><i class="fas fa-arrow-right"></i> </button>
                                    <button  onclick="document.getElementById('broadcast-job-{{$job->id}}').submit();return false;"  class="btn btn-dark btn-sm"><i class="fas fa-send"></i> </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    No Broadcast Jobs Founded.
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

