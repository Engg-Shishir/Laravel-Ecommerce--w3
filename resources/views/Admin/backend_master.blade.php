<!--============================== Backend Master Tamplate Start ======================-->
<!--============================== Backend Master Tamplate Start ======================-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--========= Page Title =========-->
    <title>Admin | @yield('title')</title>

    <!--========= vendor css =========-->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet"><!--===Fontawesome===-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"><!--===bootstrap===-->
    <link href="{{asset('backend')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet"><!--===Ionicons===-->
    <link href="{{asset('backend')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"><!--===perfect-scrollbar===-->
    <link rel="stylesheet" href="{{asset('backend')}}/css/starlight.css"><!--===starlight===-->
    <link href="{{asset('backend')}}/lib/highlightjs/github.css" rel="stylesheet"><!--===highlightjs===-->
    <link href="{{asset('backend')}}/lib/datatables/jquery.dataTables.css" rel="stylesheet"><!--===datatables===-->
    <link href="{{asset('backend')}}/lib/select2/css/select2.min.css" rel="stylesheet"><!--===select2===-->
    <link href="{{asset('backend')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet"><!--===rickshaw===-->
    <link href="{{asset('backend')}}/lib/medium-editor/medium-editor.css" rel="stylesheet"><!--===medium-editor===-->
    <link href="{{asset('backend')}}/lib/medium-editor/default.css" rel="stylesheet"><!--===default===-->
    <link href="{{asset('backend')}}/lib/summernote/summernote-bs4.css" rel="stylesheet"><!--===summernote===-->
  </head>

  <body>

  <!--========= ########## START: LEFT PANEL ########## =========-->
    <div class="sl-logo">
      <a href="{{url('/admin/home')}}"><i class="icon ion-android-star-outline"></i> Starlight</a>
    </div>
    <!--========= sl-sideleft =========-->
    <div class="sl-sideleft">
      <div class="sl-sideleft-menu">
        <a href="{{url('/admin/home')}}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label ">Dashboard</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->
        <a href="{{url('/')}}" target="_blank" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Visit</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->

        <a href="{{route('admin.categorys')}}" class="sl-menu-link @yield('category')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Category</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->

        <a href="{{route('admin.brand')}}" class="sl-menu-link @yield('brand')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Brand</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->

          
        <a href="#" class="sl-menu-link  @yield('products')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Products</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->
        <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="{{route('add-products')}}" class="nav-link @yield('add-products')">Add Product</a></li> 
          <li class="nav-item"><a href="{{route('manage-products')}}" class="nav-link @yield('manage-products')">Manage Product</a></li>
        </ul>

        <a href="{{route('admin.cupon')}}" class="sl-menu-link @yield('cupon')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Cupon</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->

        <a href="{{route('admin.order')}}" class="sl-menu-link @yield('order')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Order</span>
          </div><!--========= menu-item =========-->
        </a><!--========= sl-menu-link =========-->

      </div><!--========= sl-sideleft-menu =========-->
    </div>
  <!--========= ########## END: LEFT PANEL ########## =========-->

  <!--========= ########## START: HEAD PANEL ########## =========-->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!--========= sl-header-left =========-->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <!--========= Show Authenticated User name =========-->
            <span class="logged-name">
              @if(Auth::check())
              {{Auth::user()->name}}
              @else
              @endif
            </span>
              <img src="{{asset('backend')}}/img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
              <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!--========= dropdown-menu =========-->
          </div><!--========= dropdown =========-->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!--========= start: if statement =========-->
            <span class="square-8 bg-danger"></span>
            <!--========= end: if statement =========-->
          </a>
        </div><!--========= navicon-right =========-->
      </div><!--========= sl-header-right =========-->
    </div>
  <!--========= ########## End: HEAD PANEL ########## =========-->

  <!--========= ########## sl-sideright Start =========-->
    <div class="sl-sideright">
      <!--========= sidebar-tabs =========-->
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul>
      <div class="tab-content">
        <!--========= #messages =========-->
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!--========= loop starts here =========-->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend')}}/img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!--========= media =========-->
            </a>
            <!--========= loop ends here =========-->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('backend')}}/img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!--========= media =========-->
            </a>
          </div>
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div>
        <!--========= #notifications =========-->
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!--========= loop starts here =========-->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('backend')}}/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!--========= media =========-->
            </a>
          </div><!--========= media-list =========-->
        </div>
      </div>
    </div>
  <!--========= ########## sl-sideright End =========-->











  <!--========= ########## Main Content ########## --->
  @yield('admin_content')
  <!--========= ########## Main Content End########## --->













  


    <script src="{{asset('backend')}}/lib/jquery/jquery.js"></script><!--===jquery===-->
    <script src="{{asset('backend')}}/lib/jquery-ui/jquery-ui.js"></script><!--===jquery-ui===-->
    <script src="{{asset('backend')}}/lib/popper.js/popper.js"></script><!--===popper===-->
    <script src="{{asset('backend')}}/lib/bootstrap/bootstrap.js"></script><!--===bootstrap===-->
    <script src="{{asset('backend')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script><!--===perfect-scrollbar===-->
    <script src="{{asset('backend')}}/lib/datatables/jquery.dataTables.js"></script><!--===datatables===-->
    <script src="{{asset('backend')}}/lib/datatables-responsive/dataTables.responsive.js"></script><!--===datatables===-->
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script><!--===datatables Custom code===-->    
    <script src="{{asset('backend')}}/lib/medium-editor/medium-editor.js"></script><!--===medium-editor===-->
    <script src="{{asset('backend')}}/lib/summernote/summernote-bs4.min.js"></script><!--===medium-editor===-->
    <script>
      $(function(){
        'use strict';
    
        // Inline editor
        var editor = new MediumEditor('.editable');
    
        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        });
            
        // Summernote editor
        $('#summernote1').summernote({
          height: 150,
          tooltip: false
        });
      });
    </script><!--===medium-editor custom Code===-->
    <script src="{{asset('backend')}}/js/starlight.js"></script><!--===starlight===-->
    <script src="{{asset('backend')}}/lib/highlightjs/highlight.pack.js"></script><!--===highlightjs===-->
    <script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script><!--===select2===-->
    <script src="{{asset('backend')}}/js/dashboard.js"></script><!--===dashboard===-->

    @stack('scripts')<!--========= Create Script Tag Link =========-->
  </body>
</html>
