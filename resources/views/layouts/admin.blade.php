<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guidance System</title>

<!-- Custom fonts for this template-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                    <a class="nav-link" href="guidance.html"
                    :active="request()->routeIs('guidance')">
                        <i class="fas fa-user-graduate"></i>
                        <span>{{ __('Guidance') }}</span></a>
            </li>
            
            

            <!-- Divider -->
            <hr class="sidebar-divider">
            @role('admin')
            <li class="nav-item active">
                <a class="nav-link" href="index.html"
                :active="request()->routeIs('index.html')">
                    <i class="fas fa-user-graduate"></i>
                    <span>{{ __('admin') }}</span></a>
            </li> 
            @endrole

            <!-- Heading -->
            <div class="sidebar-heading">
              Counselling 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-calendar-alt"></i>
                    <span>Scheduling</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Counselling Schedule:</h6>
                        <x-nav-link class="collapse-item" href="add-schedule.html"
                         :active="request()->routeIs('add-schedule')">{{ __('add Schedule') }}</x-nav-link>

                        <x-nav-link class="collapse-item" href="schedule.html"
                         :active="request()->routeIs('Schedule')">{{ __(' Time & Date') }}</x-nav-link>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
              Reports
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="far fa-file-alt"></i>
                    <span>Bad Record</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Records:</h6>
                        <x-nav-link class="collapse-item" href="addrecord.html "
                        :active="request()->routeIs('addrecord')">{{ __('Add Records') }}</x-nav-link>
                        <x-nav-link class="collapse-item" href="record.html"
                        :active="request()->routeIs('record')">{{ __('Student Records') }}</x-nav-link>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Scholar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="	fas fa-book-reader"></i>
                    <span>Scholarship</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">scholar:</h6>
                        <x-nav-link class="collapse-item" href="addscholar.html"
                        :active="request()->routeIs('addscholar')">{{ __('Add Scholar') }}</x-nav-link>
                        <x-nav-link class="collapse-item" href="scholar.html"
                        :active="request()->routeIs('scholar')">{{ __('Scholar') }}</x-nav-link>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

    <!-- Heading -->
      <div class="sidebar-heading">
            Evaluation
        </div>
        <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEva"
                    aria-expanded="true" aria-controls="collapseEva">
                    <i class="	fas fa-chalkboard-teacher"></i>
                    <span>Evaluation</span>
                </a>
                <div id="collapseEva" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Teacher Records:</h6>
                        <x-nav-link class="collapse-item" href="evaluation.html"
                        :active="request()->routeIs('evaluation')">{{ __('Teacher Evaluation') }}</x-nav-link>
                        <x-nav-link class="collapse-item" href="teacher-records.html"
                        :active="request()->routeIs('teacher-records')">{{ __('Teacher Records ') }}</x-nav-link>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider my-0">

                <!-- Nav Item - info -->
                <li class="nav-item active">
                    <a class="nav-link" href="student.html"
                    :active="request()->routeIs('guidance')">
                        <i class="fas fa-user-graduate"></i>
                        <span>Student Info</span></a>
                </li>
                </li>
            <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="">
                        <i class="fas fa-user-graduate"></i>
                        <span>User Info</span></a>
                </li>
                


       


     

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
    
                 
            

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>
            
                                    </button>
                                </x-slot>
            
                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
            
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container-fluid">
                    @yield('content')
                </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
              
            </div>
        </div>
    </div>
    <script>
        
    </script>

   <!-- Bootstrap core JavaScript-->
   <script src="{{ asset('js/jq.min.js') }}"></script>
    {{-- <script src="{{ mix('js/app.copy.js') }}"></script> --}}


    <!-- Custom scripts for all pages-->

    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>