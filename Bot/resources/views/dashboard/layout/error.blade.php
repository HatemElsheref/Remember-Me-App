@if($errors->any())
    <div class="row">
        <div class="col-xl-12 mb-4">
    <div class="">
        <div class="card border-left-danger shadow h-100 py-2" style="float: left">
            <div class="py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">

            @foreach($errors->all() as $error)
            <h6 class="m-0 font-weight-bold text-danger"style="padding-left:10px">
                <i class="fa fa-fire"></i> {{$error}}</h6>
        @endforeach
            </div>
        </div>
    </div>
        </div>
    </div>
@endif
