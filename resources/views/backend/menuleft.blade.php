<div class="left_col scroll-view">
  <div class="navbar nav_title" style="border: 0;">
    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
  </div>
  <div class="clearfix"></div>
  <!-- /menu profile quick info -->
  <br />
  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-bookmark"></i>  Fronted <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li>  <a href="{{ url('/payment')}}" class="active">หน้าจ่ายเงิน</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-navicon"></i> Orders <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/orders')}}">Orders</a></li>
            <li><a href="{{ url('/totalincome')}}">totalincome</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->
</div>
