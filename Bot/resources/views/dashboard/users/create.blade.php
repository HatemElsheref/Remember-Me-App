@extends('dashboard.layout.app')


@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
                  <div class="row">
                      <div class="col-xl-12 mb-4">
                          @include('dashboard.layout.error')
                      </div>
                  </div>
            <div class="row">
            <!-- Pending Requests Card Example -->
                <div class="col-xl-3 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                            <h6 class="m-0 font-weight-bold text-primary"style="padding-left:10px">Account Information</h6>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6">
                    <form autocomplete="off" method="post" action="{{route('user.store')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control  border-1 small" name="name" placeholder="Enter User Name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>User Email</label>
                            <input type="email" class="form-control  border-1 small" name="email" placeholder="Enter User Email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>Telegram ID</label>
                            <input type="number" class="form-control  border-1 small" name="tid" placeholder="Enter Telegram Id" value="{{old('tid')}}">
                        </div>
                        <div class="form-group">
                            <label>User Password</label>
                            <input type="password" class="form-control pull-right" name="password"  placeholder="Enter User Password">
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>  <br>
                            <input type="file" class="btn btn-primary"  name="avatar">
                            <button type="submit" class="btn btn-primary" style="display: inline-block;float: right"><i  class="fa fa-plus"></i> Save</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
