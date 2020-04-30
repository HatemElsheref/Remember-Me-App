
@extends('dashboard.layout.app')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
        @include('dashboard.layout.error')

        <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div>
                    <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">Add New Annual Job</small></h1>


                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-12 mb-4">
                    <form autocomplete="off" method="post" action="{{route('job.store.annual')}}">
                        @csrf
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control  border-1 small" name="title" placeholder="Enter Job Title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label>Job Class</label>
                            <input type="text" class="form-control  border-1 small" name="department" placeholder="Enter Job Department" value="{{old('department')}}">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control pull-right" id="datepicker" name="in" placeholder="Enter Your Date" value="{{old('in')}}">
                        </div>
                        <!-- checkbox -->
                        <div class="form-group">

                            <label>
                                <input type="checkbox" class="minimal" name="status" @if(old('status'))checked @endif>
                                Published
                            </label>
                        </div>
                        <button class="btn btn-primary"><i  class="fa fa-plus"></i> Save</button>
                    </form>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection

