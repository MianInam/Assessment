<!doctype html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/fav.png') }}" />


    <title>Feedback System</title>

    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.
                    js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>


    <style>
        html {
            /* background: #313193cc !important; */
            --primary01: #313193cc !important;
            --primary02: #313193cc !important;
            --primary03: #313193cc !important;
            --primary06: #313193cc !important;
            --primary09: #313193cc !important;
        }

        .profile-elene {
            color: grey !important;
        }

        .pe-2:hover .profile-elene {
            opacity: 1 !important;
            color: rgb(41, 37, 37) !important;
        }

        .horizontal .side-menu .side-menu__icon {
            font-size: 1.1rem !important;
        }

        .responsive-navbar .dropdown-menu {
            left: unset !important;

        }

        .side-menu__item {
            margin: 6px 0px 2px 0px !important;
        }

        .fe-home:before {
            content: "\e977";
            padding-right: 7px;
            font-size: 20px;
        }

        ul#main-menu_student {
            align-items: center;
        }
    </style>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('./css/app.css') }}"> --}}


</head>

<body>
    <div id="auth">
    </div>

    {{-- <div id="global-loader">
        <img src="{{ asset('../../assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div> --}}


    {{-- @if (get_rout_name(Route::currentRouteName(), 'admin', 0)) --}}

    <div>
        <div class="page" id="app">

            <div id="global-loader">
                <img src="{{ asset('../../assets/images/loader.svg') }}" class="loader-img" alt="Loader">
            </div>
            <div class="page-main">
                {{-- top bar --}}
                <div v-show="!($route.path == '/' || $route.path == '/register')" class="app-header header sticky">
                    <div class="container main-container">
                        <div class="d-flex">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                                href="javascript: void(0);"></a>

                            <div class="d-flex order-lg-2 ms-auto header-right-icons">

                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <router-link to="/logout" class="dropdown-item"
                                                         href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn"
                                                     enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path
                                                        d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z">
                                                    </path>
                                                </svg>
                                                Log out
                                            </router-link>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="app-content main-content mt-0">
                    <div class="side-app">
                        <div class="main-container">
                            <div class="inner-body" id="content">
                                <router-view :key="componentKey"> </router-view>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <script src="{{ mix('/js/app.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>

    <!-- INTERNAL Notifications js -->
    <script src="{{ asset('assets/plugins/notify/js/rainbow.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/sample.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/jquery.growl.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>


    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <!--  Switcher js -->
    {{-- <script src="{{asset('assets/switcher/js/switcher.js')}}"></script> --}}
    {{-- <script src="{{asset('assets/js/custom1.js')}}"></script> --}}


    {{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> --}}
    <script type="application/javascript">
            $(document).ready(function () {
                header();
            });
        </script>
</body>

</html>
