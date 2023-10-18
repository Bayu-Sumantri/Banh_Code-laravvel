  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ url('/') }}" class="brand-link">
              <img src="{{ asset('/banhcode/assets/img/Banh_Code-(no-background).png') }}" alt="AdminLTE Logo"
                  class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Banh_Code</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                        @if (auth()->user()->Profile)
              <img class="brand-image img-circle elevation-3" src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                  alt="" style="width: 40px; height: 40px;">
          @else
                  <img src="{{ asset('/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                      alt="User Image">
                      @endif
              </div>
              <div class="info">
                  <a href="{{ route('profil') }}" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item menu-close">
                      <a href="{{ url('#') }}" class="nav-link active">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                              Admin Master
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('User.index') }}" class="nav-link">
                                  <i class="fas fa-money-check nav-icon"></i>
                                  <p>Create User</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('user_list') }}" class="nav-link ">
                                  <i class="fas fa-users nav-icon"></i>
                                  <p>List User</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('kelas_create') }}" class="nav-link">
                                  <i class="fa fa-door-open fa-solid nav-icon"></i>
                                  <p>kelas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('Pengajar.index') }}" class="nav-link">
                                  <i class="fa fa-door-open fa-solid nav-icon"></i>
                                  <p>Pengajar</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  {{-- User --}}
                  <li class="nav-item menu-close">
                      <a href="{{ url('#') }}" class="nav-link active">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                                User Sup
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('pembelian_show',) }}" class="nav-link">
                                  <i class="fas fa-money-check nav-icon"></i>
                                  <p>Pembelian</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('tugas_user') }}" class="nav-link ">
                                  <i class="fas fa-users nav-icon"></i>
                                  <p>Tugas</p>
                              </a>
                          </li>
                      </ul>
                  </li>


                  {{-- Staff --}}
                  <li class="nav-item menu-close">
                      <a href="{{ url('#') }}" class="nav-link active">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                                Staff Sup
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('create_tugas',) }}" class="nav-link">
                                  <i class="fas fa-money-check nav-icon"></i>
                                  <p>Create Tugas </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('tugas_user') }}" class="nav-link ">
                                  <i class="fas fa-users nav-icon"></i>
                                  <p>Tugas</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('user_list') }}" class="nav-link ">
                                  <i class="fas fa-users nav-icon"></i>
                                  <p>Transaksi</p>
                              </a>
                          </li>
                      </ul>
                  </li>



              </ul>
          </nav>





          <!-- /.sidebar-menu -->


      </div>
      <!-- /.sidebar -->
  </aside>
