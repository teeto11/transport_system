<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">

        <div class="pull-left info">
         {{-- <p>{{ Auth::user()->name }}</p> --}}
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ url('/admin_bookings') }}">
            <i class="fa fa-dashboard"></i> <span>Bookings</span>
            
          </a>
         
          <li>
            <a href="#"><i class="icon-tree5"></i> <span>TRIPS</span></a>
            <ul>
                <li><a href="{{url('/trip/create')}}">Add a trip</a></li>
                <li><a href="{{url('/trip/all')}}">View all trips</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="icon-select2"></i> <span>TERMINALS</span></a>
            <ul>
                <li><a href="{{url('/terminal/create')}}">Add a terminal</a></li>
                <li><a href="{{url('/terminal/all')}}">View all terminals</a></li>
            </ul>
        </li>
          
        </li>
    </ul>
       
    </section>
    <!-- /.sidebar -->
  </aside>