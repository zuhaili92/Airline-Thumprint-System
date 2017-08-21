
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>THUMBPRINT SYSTEM FROM AIRLINES (TAS)</title>

        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        
        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes/modern.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
   
        <body class="page-loading">
        <!-- Preloader -->
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><img src="../img/logo2.png" width="25%" alt="Logo TAS"></h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        <!-- END Preloader -->


        <!-- Page Container -->
        <div id="page-container" class="header-fixed-bottom sidebar-partial sidebar-visible-lg sidebar-no-animations footer-fixed">
            

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.php?site=dashboard" class="sidebar-brand">
                            <img src="img/logo_sm.png" width="20%"><strong>TAS</strong>
                            <!-- <i class="gi gi-flash"></i><strong>Ez</strong>Bake -->
                        </a>
                        <!-- END Brand -->

                        <!-- User Info -->
                        <div class="sidebar-section sidebar-user clearfix">
                            <div class="sidebar-user-avatar">
                                <a href="index.php?site=dashboard">
                                    <img src="img/user.png" alt="avatar">
                                </a>
                            </div>
                            <div class="sidebar-user-name"><?php echo ucwords($datainfo['first_name']); ?></div>
                          
                        </div>
                        <!-- END User Info -->
                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="?site=dashboard"><i class="gi gi-stopwatch sidebar-nav-icon"></i>Main</a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-charts sidebar-nav-icon"></i>Immigration</a>
                                <ul>
                                    <li>
                                        <a href="?site=createuser">Create User</a>
                                    </li>
                                    <li>
                                        <a href="?site=manageuser">Manage User</a>
                                    </li>
                                </ul>
                            </li>
                           <!--  <li>
                                <a href="?site=reportticket"><i class="gi gi-share_alt sidebar-nav-icon"></i>Report Ticket Passenger</a>
                            </li> -->
                            <li>
                                <a href="?site=profile"><i class="gi gi-link sidebar-nav-icon"></i>Profile</a>
                            </li>
                            <li>
                                <a href="../logout.php"><i class="gi gi-show_big_thumbnails sidebar-nav-icon"></i>Logout</a>
                            </li>

                        </ul>
                        <!-- END Sidebar Navigation -->
          
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->
                        <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
               
                <header class="navbar navbar-default navbar-fixed-bottom">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    
                </header>
                <!-- END Header -->