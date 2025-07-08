<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Smart Van - @yield('title')</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    @stack('page_styles')

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
  </head>

  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
           <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="">
                    <i class="fas fa-home"></i>
                    <p>Home</p>
                    </a>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon"><i class="fa fa-ellipsis-h"></i></span>
                    <h4 class="text-section">School Admin (Web+Tablet Version)</h4>
                </li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#dashboardMenu">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboardMenu">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Active/Inactive Vans</span></a></li>
                        <li><a href="#"><span class="sub-item">Driver Availability</span></a></li>
                        <li><a href="#"><span class="sub-item">Student & Parent Onboarding</span></a></li>
                        <li><a href="#"><span class="sub-item">Live Route Map</span></a></li>
                        <li><a href="#"><span class="sub-item">Alerts Summary</span></a></li>
                        <li><a href="#"><span class="sub-item">Trip Success/Failure Rate</span></a></li>
                        <li><a href="#"><span class="sub-item">Delayed Trips Log</span></a></li>
                        <li><a href="#"><span class="sub-item">Missed Pickups/Drop-offs</span></a></li>
                        <li><a href="#"><span class="sub-item">Ticketing & Complaints</span></a></li>
                        <li><a href="#"><span class="sub-item">Quick Action Links</span></a></li>
                        <li><a href="#"><span class="sub-item">Real-time KPIs</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Student Management -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#studentManagement">
                    <i class="fas fa-user-graduate"></i>
                    <p>Student Management</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="studentManagement">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Manage Student Records</span></a></li>
                        <li><a href="#"><span class="sub-item">Upload Photo & School ID</span></a></li>
                        <li><a href="#"><span class="sub-item">Assign Class & Section</span></a></li>
                        <li><a href="#"><span class="sub-item">Assign Van & Route</span></a></li>
                        <li><a href="#"><span class="sub-item">Link to Parents</span></a></li>
                        <li><a href="#"><span class="sub-item">Trip Logs & Alerts</span></a></li>
                        <li><a href="#"><span class="sub-item">Status Indicators</span></a></li>
                        <li><a href="#"><span class="sub-item">Import/Export Students</span></a></li>
                        <li><a href="#"><span class="sub-item">Special Pickup Flags</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Van & Driver Management -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#vanDriverManagement">
                    <i class="fas fa-shuttle-van"></i>
                    <p>Van & Driver Management</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="vanDriverManagement">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Manage Vans</span></a></li>
                        <li><a href="#"><span class="sub-item">Manage Drivers</span></a></li>
                        <li><a href="#"><span class="sub-item">Assign Drivers</span></a></li>
                        <li><a href="#"><span class="sub-item">Assign Zones & Routes</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Route Planner -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#routePlanner">
                    <i class="fas fa-route"></i>
                    <p>Route Planner</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="routePlanner">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Map-Based Creator</span></a></li>
                        <li><a href="#"><span class="sub-item">Manage Stops</span></a></li>
                        <li><a href="#"><span class="sub-item">Pickup/Drop Timings</span></a></li>
                        <li><a href="#"><span class="sub-item">Simulate Routes</span></a></li>
                        <li><a href="#"><span class="sub-item">Google Maps Integration</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Alerts Overview -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#alertsOverview">
                    <i class="fas fa-bell"></i>
                    <p>Alerts Overview</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="alertsOverview">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Sent / Pending / Acknowledged</span></a></li>
                        <li><a href="#"><span class="sub-item">Filter by Date/Type/Route</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Reports -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#reportsSection">
                    <i class="fas fa-chart-pie"></i>
                    <p>Reports</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="reportsSection">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Trip Logs</span></a></li>
                        <li><a href="#"><span class="sub-item">Performance Reports</span></a></li>
                        <li><a href="#"><span class="sub-item">Export CSV/PDF</span></a></li>
                    </ul>
                    </div>
                </li>

                <!-- Parent Account -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#parentAccount">
                    <i class="fas fa-user-friends"></i>
                    <p>Parent Account</p>
                    <span class="caret"></span>
                    </a>
                    <div class="collapse" id="parentAccount">
                    <ul class="nav nav-collapse">
                        <li><a href="#"><span class="sub-item">Support Tickets</span></a></li>
                        <li><a href="#"><span class="sub-item">Support Inbox</span></a></li>
                        <li><a href="#"><span class="sub-item">Internal Notes</span></a></li>
                    </ul>
                    </div>
                </li>
            </ul>

          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      {{-- Include the Topbar --}} @include('layouts.topbar')

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <!-- <button
                    type="button"
                    class="changeSideBarColor"
                    data-color="blue"
                    ></button>
                    <button
                    type="button"
                    class="changeSideBarColor"
                    data-color="purple"
                    ></button>
                    <button
                    type="button"
                    class="changeSideBarColor"
                    data-color="green"
                    ></button> -->
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
    @stack('page-scripts')
  </body>
</html>
