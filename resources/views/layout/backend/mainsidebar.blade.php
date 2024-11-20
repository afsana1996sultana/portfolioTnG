<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/admin')}}" class="brand-link">
    <span class="brand-text font-weight-light">TNG PLUS ELECTRIC</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('backend/img/admin.jpg')}}" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="{{url('/admin')}}" class="d-block">Admin Panel</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Admin Setting</li>
        <li class="nav-item">
          <a href="{{url('/admin')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p> 
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('contactus/1/edit')}}" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Contact Us</p>   
          </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
              <p>
                Inbox
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/message')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Message</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/newsletter')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
                <p>Newsletter</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{url('/users')}}" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>User</p>   
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book-open"></i>
            <p>Menus
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/menu')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/submenu')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sub-menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/childmenu')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Child-menu</p>
              </a>
            </li>
          </ul>
        </li>
        
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book-open"></i>
            <p>Pages
            <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('all-activity/1/edit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Activity</p>
              </a>
            </li>
            
             <li class="nav-item">
              <a href="{{url('all-event/1/edit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Events</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{url('privacy/1/edit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Privacy & Policy</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{url('terms-condition/1/edit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Terms & Condition</p>
              </a>
            </li>
          </ul>
        </li> --}}

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              About Us
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('aboutus/1/edit')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>About</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{url('/frontlogo')}}" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>Logo</p> 
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book-open"></i>
                <p>Our Team
                <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('/team')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lead Team Member</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/teammember')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Other Team Member</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Dealers
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('dealer-list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dealer List</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Slider
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('slider-create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Slider Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('slider-list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Slider List</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Product
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/product')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Product</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('allProduct')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Product</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Gallary
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/galleries')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Gallary List</p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="{{url('/video/galleries')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Video List</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{url('/ourclient')}}" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Our Clients</p>   
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              Others
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="{{url('/frequentsection')}}" class="nav-link">
                <i class="fa fa-edit nav-icon"></i>
                <p>Frequently Ask Question</p>
              </a>
            </li> --}}

            {{-- <li class="nav-item">
              <a href="{{url('/skill')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Skills</p>
              </a>
            </li> --}}
            
            <li class="nav-item">
              <a href="{{url('/count')}}" class="nav-link">
                <i class="fa fa-edit nav-icon"></i>
                <p>Counts</p>
              </a>
            </li>
            
            {{-- <li class="nav-item">
              <a href="{{url('/choosesection')}}" class="nav-link">
                <i class="fa fa-edit nav-icon"></i>
                <p>Choose Section</p>
              </a>
            </li> --}}
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>