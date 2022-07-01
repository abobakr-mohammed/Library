
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
           <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-link"></i> <span>Dashboard</span>
            <li class="active"><a href="{{ route('show.book') }}"><i class="fa fa-link"></i> <span>Books</span>
            <strong class="badge">{{ App\Models\Book::count() }}</strong>
            </a></li>
            <li><a href="{{ route('show.category') }}"><i class="fa fa-link"></i> <span>Category</span>
              <strong class="badge">{{ App\Models\Category::count() }}</strong>
            </a></li>
            <li><a href="{{ route('show.readers') }}"><i class="fa fa-link"></i> <span>Readers</span>
             <strong class="badge">{{App\Models\Reader::count()}}</strong>
            <li class="active"><a href="{{ route('create.category') }}"><i class="fa fa-link"></i> <span>Create Category</span>   </a></li>
            <li class="active"><a href="{{ route('create.book') }}"><i class="fa fa-link"></i> <span>Create Book</span>   </a></li>
            <li class="active"><a href="{{ route('create.readers') }}"><i class="fa fa-link"></i> <span>Create Reader</span>   </a></li>
                           
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
