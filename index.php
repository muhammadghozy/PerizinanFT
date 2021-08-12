
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Fakultas Teknik</title>

        <meta name="description" content="Portal Fakultas Teknik">
        <meta name="author" content="yudhi kusuma">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="SgKwRQ0nQqxn9vFjpKuNuaz5GGumuRzxwNiroQpu">

        <!-- Icons -->
        <!-- <link rel="shortcut icon" href="https://si.ft.uns.ac.id/portalelektro/media/favicons/favicon.png">
        <link rel="icon" sizes="192x192" type="image/png" href="https://si.ft.uns.ac.id/portalelektro/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://si.ft.uns.ac.id/portalelektro/media/favicons/apple-touch-icon-180x180.png"> -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="https://si.ft.uns.ac.id/portalelektro/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="https://si.ft.uns.ac.id/portalelektro/js/plugins/slick/slick.css">
        <link rel="stylesheet" href="https://si.ft.uns.ac.id/portalelektro/js/plugins/slick/slick-theme.css">

        <!-- Fonts and Styles -->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="https://si.ft.uns.ac.id/portalelektro/css/codebase.css">
		
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
        <!-- Scripts -->
        <script>window.Laravel = {"csrfToken":"SgKwRQ0nQqxn9vFjpKuNuaz5GGumuRzxwNiroQpu"};</script>
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class=" sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-inverse">
            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
          

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header bg-gd-primary">
                    <!-- Left Section -->
                    <div class="content-header-section w-100">
                        <!-- Toggle Sidebar -->
                        <div class="row no-gutters">
                            <div class="col">
                                <!-- Toggle Sidebar -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                                    <i class="fa fa-navicon"></i>
                                </button>
                                <!-- END Toggle Sidebar -->

                                <!-- Header Navigation -->
                                <!--
                                Desktop Navigation, mobile navigation can be found in #sidebar

                                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                                If your sidebar menu includes headings, they won't be visible in your header navigation by default
                                If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                                -->
                                <ul class="nav-main-header">
                                    <li>
                                        <a class="font-w700" href="index.php">
                                            <span class="d-none d-md-inline-block">
                                                <span class="font-size-xl text-white">Sistem Informasi Perizinan</span><span class="font-size-xl text-white"> Fakultas Teknik </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Header Navigation -->
                            </div>
                            <div class="col text-right">
                                <!-- Open Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <!-- <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                                    <i class="fa fa-search"></i>
                                </button> -->
                                <!-- END Open Search Section -->

                                <!-- Compose -->
                                <a type="button" class="btn btn-warning ml-5 d-none d-sm-inline" href="login.php">
                                    <i class="si si-login text-white"></i>
                                    <span class="d-none d-sm-inline text-white">Login</span>
                                </a>
                                <!-- END Compose -->
                            </div>
                        </div>
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button> -->
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->
                </div>
                <!-- END Header Content -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

            <!-- Hero -->
<!-- <div class="bg-image bg-image-bottom" style="background-image: url('https://si.ft.uns.ac.id/portalelektro/media/photos/photo34@2x.jpg');">
    <div class="bg-primary-dark-op">
        <div class="content content-top text-center overflow-hidden">
            <div class="pt-50 pb-20">
                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Teknik Elektro</h1>
                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Selamat Datang di Portal Elektro!</h2>
            </div>
        </div>
    </div>
</div> -->
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Slider with multiple images and center mode -->
            <div class="block block-rounded">
                <!-- <div class="block-header block-header-default">
                    <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Multiple Images &amp; Center Mode</h3>
                </div> -->
                    <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true"  data-autoplay="true" data-autoplay-speed="3000">
                        <div class="bg-image bg-image-middle" style="background-image: url(images/fakteknik.jpg);">
                            <div class="bg-primary-dark-50">
                                <div class="content content-top text-center overflow-hidden">
                                    <div class="pt-50 pb-20">
                                        <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Fakultas Teknik</h1>
										</br>
                                        <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Selamat Datang di Sistem Inforamsi </h2>
										<h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Perizinan Fakultas Teknik</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- END Slider with multiple images and center mode -->
        </div>
    </div>
	
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-right bg-gd-dusk" href="login.php">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-center mt-10 d-none d-sm-block ">
                        <i class="font-size-sm font-w600 text-uppercase text-white-op ">Masuk</i>
                    </div>
                    
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-right bg-gd-sea" href="login.php">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-center mt-10 d-none d-sm-block ">
                        <i class="font-size-sm font-w600 text-uppercase text-white-op ">Perizinan</i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-right bg-gd-lake" href="login.php">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-center mt-10 d-none d-sm-block ">
                        <i class="font-size-sm font-w600 text-uppercase text-white-op ">Info</i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent text-right bg-gd-emerald" href="login.php">
                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                    <div class="float-center mt-10 d-none d-sm-block ">
                        <i class="font-size-sm font-w600 text-uppercase text-white-op ">Kontak</i>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
		
		
    </div>
	<div class="row">
	<div class="col-md-12">
	<div class="block block-rounded  bg-info " style="background-image: url('https://si.ft.uns.ac.id/portalelektro/media/Dashboard3.png');" >
						<div class="content content-top text-right overflow-hidden ">
                                    <div class="pt-50 pb-20">
                                        <h1 class="font-w700 text-dark mb-10" >Berita Terkini Fakultas Teknik</h1>
										<h2 class="h4 font-w400 text-dark-op" >Laboratorium Fakultas Teknik</h2>
                                    </div>
                                </div>
				
	
	</div></div>
	</div>
	
	
    

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-100 bg-gd-primary">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="text-center">
                        
                        <a class="font-w600 text-white-op" >Sistem Informasi Perizinan</a>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="https://si.ft.uns.ac.id/portalelektro/js/codebase.app.js"></script>

        <!-- Page JS Plugins -->
        <script src="https://si.ft.uns.ac.id/portalelektro/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="https://si.ft.uns.ac.id/portalelektro/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="https://si.ft.uns.ac.id/portalelektro/js/pages/tables_datatables.js"></script>
        <script src="https://si.ft.uns.ac.id/portalelektro/js/plugins/slick/slick.min.js"></script>

        <script>jQuery(function(){ Codebase.helpers('slick'); });</script>
    </body>
</html>
