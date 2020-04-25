<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('storage/images/user/'.Auth::user()->image)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        {{-- <li><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li> --}}
        <li><a href="/item"><i class="fa fa-book"></i> <span>Drinks</span></a></li>
        @if (Auth::user()->name=='Admin')
        <li><a href="/cluster"><i class="fa fa-book"></i> <span>Clusters</span></a></li>
        @endif
        <li><a href="/cart"><i class="fa fa-book"></i> <span>Shopping Cart</span></a></li>
        <li><a href="/item/recomendation"><i class="fa fa-book"></i> <span>Recomendation</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
