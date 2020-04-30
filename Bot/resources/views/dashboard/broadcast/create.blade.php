
@extends('dashboard.layout.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
    @include('dashboard.layout.error')
    <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">Add Broadcast Job</small></h1>


            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-12 mb-4">
                <form autocomplete="off" method="post" action="{{route('broadcast.store')}}" enctype="multipart/form-data">
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
                        <label>From Date</label>
                        <input type="text" class="form-control pull-right" id="datepicker" name="from" placeholder="Enter Your Start Date" value="{{old('from')}}">
                    </div>
                    <div class="form-group">
                        <label>To Date</label>
                        <input type="text" class="form-control pull-right" id="datepicker1" name="to" placeholder="Enter Your End Date" value="{{old('to')}}">
                    </div>
                    <div class="form-group">
                        <label>Time picker:</label>
                        <input type="text" class="form-control timepicker" name="time" value="{{old('time')}}">
                    </div>
                    <div class="form-group">
                        <label for="tags">Days</label>
                        <?php
                        $days=[];
                        $days['Saturday']='saturday';
                        $days['Sunday']='sunday';
                        $days['Monday']='monday';
                        $days['Tuesday']='tuesday';
                        $days['Wednesday']='wednesday';
                        $days['Thursday']='thursday';
                        $days['Friday']='friday';
                        ?>
                        <select class="form-control js-example-tokenizer" id="tags" multiple name="days[]">
                            <option  disabled="true">Select Days</option>
                            @foreach ($days as $item=>$value)
                                <option value="{{$value}}" @if(in_array($value,(array)old('days'))) selected @endif>
                                    {{$item}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Attachment</label>  <br>
                        <input type="file" class="btn btn-primary"  name="file">
                    </div>

                    <div class="form-group">
                        <label>
                            <input type="checkbox" class="minimal" name="status" @if(old('status')) checked @endif>
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

