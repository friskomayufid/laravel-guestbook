
@extends('layouts/template')

@section('container')
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Menu Form Daftar Kunjungan</span></h1>
            <p class="card-description">
              PT. Kirito Membangun Negeri
            </p>
            @if (session()->has('success'))
              {{ session()->get('success') }}
            @endif
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                  <p class="fw-light small-text mb-0"> Private message </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                  <p class="fw-light small-text mb-0"> 2 days ago </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                  <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('partials.sidebar')
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Silahkan isi Daftar Kunjungan</h3>
                  <form class="forms-sample" action="{{ route('guest') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nama Lengkap</label>
                      <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Nama">
                      @error('name')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="address">Alamat Tempat Tinggal</label>
                      <input type="text" name="address" class="form-control form-control-lg" id="address" placeholder="Alamat">
                      @error('address')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="number_phone">Nomor Handphone / Whatsapp</label>
                      <input type="text" name="number_phone" class="form-control form-control-lg" id="number_phone" placeholder="Nomor Handphone">
                      @error('number_phone')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="purpose">Tujuan Kunjungan</label>
                      <input type="text" name="purpose" class="form-control form-control-lg" id="purpose" placeholder="Tujuan">
                      @error('purpose')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg me-2">Submit Data</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card card-rounded">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                          <h4 class="card-title card-title-dash">Statistik Pengunjung</h4>
                        </div>
                        <div>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle toggle-dark btn-sm mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hari ini</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                              <h6 class="dropdown-header">Hari ini</h6>
                              <h6 class="dropdown-header">Minggu ini</h6>
                              <h6 class="dropdown-header">Bulan ini</h6>
                              <h6 class="dropdown-header">Keseluruhan</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mt-3">
                        <canvas id="leaveReport"></canvas>
                      </div>
                      <div>
                        <a href="{{ route('index' )}}" class="btn btn-lg btn-primary mt-4" style="color: #fff;
                          padding: 1rem 2rem;">List Data Kunjungan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header mt-4" style="background-color: white">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="card-title">Daftar Pengunjung Hari Ini ( <?= date('j F Y' ); ?> )</h4>
                    </div>
                  <div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable">
                            <thead>
                                <tr>
                                  <th>Nama</th>
                                  <th>Alamat Pengunjung</th>
                                  <th>Nomor Handphone</th>
                                  <th>Tujuan Kunjungan</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($guests as $guest)
                                <tr>
                                  <td>{{ $guest->name }}</td>
                                  <td>{{ $guest->address }}</td>
                                  <td class="text-success">{{ $guest->number_phone }}</td>
                                  <td><label class="badge badge-primary">{{ $guest->purpose }}</label></td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('partials/footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@endsection