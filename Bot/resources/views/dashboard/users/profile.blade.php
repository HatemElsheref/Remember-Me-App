@extends('dashboard.layout.app')


@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 mb-4">
                    @include('dashboard.layout.error')
                </div>
            </div>
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div>
                    <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">Profile</small></h1>


                </div>
            </div>
            <div class="row">

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                            <h6 class="m-0 font-weight-bold text-success"style="padding-left:10px">General Information</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 pull-right mb-4"></div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 pull-right mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                            <h6 class="m-0 font-weight-bold text-danger"style="padding-left:10px">Security Information</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6">
                    <form autocomplete="off" method="post" action="{{route('user.update',auth()->user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control  border-1 small" name="name" value="{{auth()->user()->name}}" }}>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control  border-1 small" name="email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label>Telegram ID</label>
                            <input type="number" class="form-control pull-right" name="tid" value="{{auth()->user()->tid}}">
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>  <br>
                            <input type="file" id="avatar" hidden>
                            <button onclick="document.getElementById('avatar').click();" class="btn btn-primary"><i class="fa fa-upload"></i> Upload</button>
                        </div>

                        <button class="btn btn-success"><i  class="fa fa-edit"></i> Save</button>
                    </form>

                </div>
                <div class="col-xl-6">
                    <form autocomplete="off" method="post" action="{{route('user.security')}}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control  border-1 small" name="password" placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control  border-1 small" name="password_confirmation" placeholder="Enter Password Confirmation">
                        </div>

                        <button class="btn btn-danger"><i  class="fa fa-edit"></i> Save</button>
                    </form>

                </div>
                </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
