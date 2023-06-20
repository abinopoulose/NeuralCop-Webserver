<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>NeuralCop - Admin Dashboard</title>
  <link rel="stylesheet" href="{{ asset('admin-assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('images/img.jpg') }}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
           
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ asset('admin-assets/img/user.png') }}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>
             
              <div class="dropdown-divider"></div>
                <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="fas fa-sign-out-alt"></i>                   
                     {{ __('Logout') }}
                </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset('images/img.jpg') }}" class="header-logo" /> <span
                class="logo-name">NeuralCop</span>
            </a>
          </div>
          <ul class="sidebar-menu">
           
            <li class="dropdown @php App\Http\Controllers\HomeController::isRouteActive('home',$url) @endphp">
              <a href="/home" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
           
            <li class="dropdown @php App\Http\Controllers\HomeController::isRouteActive('add_police',$url) @endphp">
              <a href="add_police" class="nav-link"><i data-feather="plus"></i><span>Add Police</span></a>
            </li>

            <li class="dropdown @php App\Http\Controllers\HomeController::isRouteActive('police_list',$url) @endphp">
              <a href="police_list" class="nav-link"><i data-feather="gitlab"></i><span>View Police</span></a>
            </li>

            <li class="dropdown @php App\Http\Controllers\HomeController::isRouteActive('add_security',$url) @endphp">
              <a href="add_security" class="nav-link"><i data-feather="plus"></i><span>Add Security</span></a>
            </li>

            <li class="dropdown @php App\Http\Controllers\HomeController::isRouteActive('security_list',$url) @endphp">
              <a href="security_list" class="nav-link"><i data-feather="shield"></i><span>View Securities</span></a>
            </li>




          </ul>
        </aside>
      </div>

      
      <div class="main-content">