<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>


    @extends('chat.layouts.css')

    @livewireStyles
</head>

<body>

<!----------------------------->
<nav class=" sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white loopple-fixed-start"
     id="sidenav-main">
    @extends('chat.layouts.sidebar')
</nav>


<div class="main-content" id="panel">

    <nav style="margin-top: -24px" class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom" id="navbarTop">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="navbar-search navbar-search-dark form-inline mr-sm-3 mb-0" id="navbar-search-main">
                    <div class="form-group mb-0">
                        <div class="input-group input-group input-group-merge">
                            <input class="form-control ml-2" placeholder="Type here..." type="text" >
                            <div class="input-group-append mr-2">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </form>
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
                        <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin" data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                            <i class="ni ni-zoom-split-in"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0 overflow-hidden">
                            <div class="px-3 pt-3">
                                <h6 class="text-sm text-muted m-0">Select Language</h6>
                            </div>
                            <div class="list-group list-group-flush">

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/US.png">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">English</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-3">
                                        <div class="col-auto">
                                            <img alt="flag" src="https://demos.creative-tim.com/argon-dashboard-pro-bs4/assets/img/icons/flags/DE.png">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Germany</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-layer-group"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                            <div class="row shortcuts px-4">
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    <small class="text-white">Calendar</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    <small class="text-white">Email</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                    <small class="text-white">Payments</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="fa fa-book"></i>
                                        </span>
                                    <small class="text-white">Reports</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="fa fa-map"></i>
                                        </span>
                                    <small class="text-white">Maps</small>
                                </a>
                                <a href="#!" class="col-4 shortcut-item text-center">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="fa fa-store"></i>
                                        </span>
                                    <small class="text-white">Shop</small>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link position-relative" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-danger badge-sm position-absolute top-0 mt-n2 right-1 px-2 py-1">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xl py-0 overflow-hidden">
                            <div class="px-3 pt-3">
                                <h6 class="text-sm text-muted m-0">You have <span class="text-primary">3</span> new notifications!</h6>
                            </div>
                            <div class="list-group list-group-flush">

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-1.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>2 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-2.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Alexa Mira</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>3 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Did you have time to read my E-mail?</p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="list-group-item list-group-item-action">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-3.jpg" class="avatar rounded-circle">
                                        </div>
                                        <div class="col ml--2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="mb-0 text-sm">Rala Micharel</h4>
                                                </div>
                                                <div class="text-right text-muted">
                                                    <small>4 hrs ago</small>
                                                </div>
                                            </div>
                                            <p class="text-sm mb-0">Just saw your referring program. Can you please give me more details?</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                    <span class="avatar avatar-sm">
                                        <img alt="Image placeholder" src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                                    </span>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-user"></i>
                                <span>My profile</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-tools"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="far fa-calendar"></i>
                                <span>Activity</span>
                            </a>
                            <a href="#!" class="dropdown-item">
                                <i class="fa fa-phone"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"> <i class="fa fa-sign-out-alt"></i> Logout</button>
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('container')



</div>

@extends('chat.layouts.script')

@livewireScripts





</body>
</html>
