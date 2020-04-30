
@extends('dashboard.layout.app')
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

                    @include('dashboard.layout.error')

            <!-- Page Heading -->
            <div class="card-header" style="border: none;padding: 10px 0px">
                       <div class="col-xs-4">
                           <a href="{{route('user.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add New User</a>
                       </div>
                   </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3 justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">List Of ALL Users</h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Telegram Id</th>
                                <th>Avatar</th>
                                <th>Controllers</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Telegram Id</th>
                                <th>Avatar</th>
                                <th>Controllers</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                 @forelse($users as $item)
                                     <tr>
                                         <td>{{$item->id}}</td>
                                         <td>{{$item->name}}</td>
                                         <td>{{$item->email}}</td>
                                         <td>{{$item->tid}}</td>
                                         <td>
                                             <img class="img-profile rounded-circle" style="width: 60px;height: 60px;" src="{{asset('uploads/'.$item->avatar)}}">
                                         </td>
                                         <td>
                                             <form id="form-{{$item->id}}" method="post" action="{{route('user.destroy',$item->id)}}">@csrf @method('delete')</form>
                                             <a href="{{route('user.edit',$item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt "></i> edit</a>
                                             <button onclick="document.getElementById('form-{{$item->id}}').submit()" class="btn btn-danger btn-sm"><i class="fas fa-trash "></i> Delete</button>
                                             <button data-toggle="modal" data-target="#sendmodel-{{$item->id}}" class="btn btn-info btn-sm"><i class="fas fa-envelope "></i> Send</button>
                                             <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-newspaper"></i> Subscribe</a>
                                         </td>
                                     </tr>
                                     <!-- Logout Modal-->
                                     <div class="modal fade" id="sendmodel-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                                                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <form action="{{route('user.telegram',$item->id)}}" method="post">
                                                         @csrf
                                                         <div class="input-group">
                                                             <input name="message" type="text" class="form-control bg-light  small" placeholder="Write Your Message" aria-label="Search" aria-describedby="basic-addon2">
                                                             <div class="input-group-append">
                                                                 <button class="btn btn-primary" type="submit">
                                                                     <i class="fa fa-send-o"></i>
                                                                 </button>
                                                             </div>
                                                         </div>
                                                     </form>
                                                 </div>
                                                 <div class="modal-footer">
                                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>


                                 @empty
                                                <tr>
                                                    <td colspan="6">No Result Founded</td>
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

