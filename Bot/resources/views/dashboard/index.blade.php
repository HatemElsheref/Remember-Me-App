
             @extends('dashboard.layout.app')
             @section('content')

                     <!-- Begin Page Content -->
                     <div class="container-fluid">

                         <!-- Page Heading -->
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                             <div>
                                 <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">JOB Statistics</small></h1>


                             </div>
                         </div>

                         <!-- Content Row -->
                         <div class="row">

                             <!-- Earnings (Monthly) Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary">Jobs</h6>
                                         <div class="dropdown no-arrow">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Operation:</div>
                                                 <a class="dropdown-item" href="#">Show ALL</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">List Jobs</a>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jobs (All)</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Earnings (Monthly) Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-success shadow h-100 py-2" style="background-color: transparent">
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                         <h6 class="m-0 font-weight-bold text-primary">Active Jobs</h6>
                                         <div class="dropdown no-arrow">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Active Jobs Operation:</div>
                                                 <a class="dropdown-item" href="#">Show ALL</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">List Jobs</a>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jobs (Active)</div>
                                                 <div class="row no-gutters align-items-center">
                                                     <div class="col-auto">
                                                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                     </div>
                                                     <div class="col">
                                                         <div class="progress progress-sm mr-2">
                                                             <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                         </div>
                                                     </div>
                                                 </div>                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Earnings (Monthly) Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-danger shadow h-100 py-2">
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary">Drafted Jobs</h6>
                                         <div class="dropdown no-arrow">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Drafted Jobs Operation:</div>
                                                 <a class="dropdown-item" href="#">Show ALL</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">List Jobs</a>
                                             </div>
                                         </div>
                                     </div>
                                     <!-- Card Header - Dropdown -->
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jobs (Drafted)</div>
                                                 <div class="row no-gutters align-items-center">
                                                     <div class="col-auto">
                                                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                     </div>
                                                     <div class="col">
                                                         <div class="progress progress-sm mr-2">
                                                             <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-dark shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary">Broadcast</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Broadcast Messages:</div>
                                                 <a class="dropdown-item" href="{{route('user.subscribe')}}">Subscribe</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Subscription (Status)</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><i class="fa fa-circle text-danger"></i> OFF</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                         <!-- Page Heading -->
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                             <div>
                                 <h1 class="h3 mb-0 text-gray-800"><small class="badge badge-primary text-sm-center ">Latest Jobs</small></h1>
                             </div>
                         </div>

                         <div class="row">
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                             <!-- Pending Requests Card Example -->
                             <div class="col-xl-3 col-md-6 mb-4">
                                 <div class="card border-left-primary shadow h-100 py-2">
                                     <div class=" card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color: transparent">
                                         <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-circle text-danger"></i> Department</h6>

                                         <div class="dropdown no-arrow ">
                                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                 <i class="fas fa-ellipsis-h fa-sm fa-fw text-gray-400"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                 <div class="dropdown-header">Job Setting:</div>
                                                 <a class="dropdown-item" href="#">Publish</a>
                                                 <a class="dropdown-item" href="#">Edit</a>
                                                 <a class="dropdown-item" href="#">Delete</a>
                                                 <div class="dropdown-divider"></div>
                                                 <a class="dropdown-item" href="#">Details</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                 <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Feb - 04 - 2020</div>
                                                 <div class="h5 mb-0 font-weight-bold text-gray-800"> Task / Job Title</div>
                                             </div>
                                             <div class="col-auto">
                                                 <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- /.container-fluid -->

                 </div>
                 <!-- End of Main Content -->
             @endsection

