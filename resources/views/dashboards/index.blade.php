
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Tableau de gestion pour vendeurs sur vtp market </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="admin/images/favicon.ico">

        <!-- plugin css -->
        <link href="admin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="admin/images/logo-dark-sm.png" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="admin/images/logo-dark-sm.png" alt="" height="26">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="admin/images/logo-light.png" alt="" height="30">
                                </span>
                                <span class="logo-sm">
                                    <img src="admin/images/logo-light-sm.png" alt="" height="26">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Hi, Welcome Back!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block language-switch ms-2">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="header-lang-img" src="admin/images/flags/us.jpg" alt="Header Language" height="18">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="admin/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="admin/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="admin/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="admin/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="admin/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell icon-sm align-middle"></i>
                                <span class="noti-dot bg-danger rounded-pill">4</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown-v">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="admin/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div>
                                                    <p class="mb-0">It will seem like simplified English.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-18">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">3 min ago</p>
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-18">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">8 min ago</p>
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="admin/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div>
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="admin/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Martin Gurley</h6>
                                    <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                                </div>
                                <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Help</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="admin/images/logo-dark-sm.png" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="admin/images/logo-dark.png" alt="" height="28">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="admin/images/logo-light.png" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="admin/images/logo-light-sm.png" alt="" height="26">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Dashboard</li>

                           <li>
                                <a href="javascript: void(0);">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                    <span class="badge rounded-pill bg-primary">2</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="index.html" data-key="t-ecommerce">Ecommerce</a></li>
                                    <li><a href="dashboard-sales.html" data-key="t-sales">Sales</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-applications">Applications</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-envelope icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-email">Ma boutique</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html" data-key="t-inbox">Inbox</a></li>
                                    <li><a href="email-read.html" data-key="t-read-email">Read Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i class="bx bx-calendar-event icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-calendar">Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-todo.html">
                                    <i class="bx bx-check-square icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-todo">Todo</span>
                                    <span class="badge rounded-pill bg-success" data-key="t-new">New</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-file-manager.html">
                                    <i class="bx bx-file-find icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-filemanager">File Manager</span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="bx bx-chat icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-chat">Chat</span>
                                    <span class="badge rounded-pill bg-danger" data-key="t-hot">Hot</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-store icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ecommerce-products.html" data-key="t-products">Products</a></li>
                                    <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                                    <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                                    <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                                    <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                                    <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                                    <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" data-key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" data-key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-user-circle icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-contacts">Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                                    <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                                    <li><a href="contacts-profile.html" data-key="t-user-profile">Profile</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-layouts">Layouts</li>

                            <li>
                                <a href="layouts-horizontal.html">
                                    <i class="bx bx-layout icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-horizontal">Horizontal</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-components">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-cube icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ui-elements">UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                                    <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                                    <li><a href="ui-cards.html" data-key="t-cards">Cards</a></li>
                                    <li><a href="ui-carousel.html" data-key="t-carousel">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html" data-key="t-dropdowns">Dropdowns</a></li>
                                    <li><a href="ui-grid.html" data-key="t-grid">Grid</a></li>
                                    <li><a href="ui-images.html" data-key="t-images">Images</a></li>
                                    <li><a href="ui-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                                    <li><a href="ui-modals.html" data-key="t-modals">Modals</a></li>
                                    <li><a href="ui-offcanvas.html" data-key="t-offcanvas">Offcanvas</a></li>
                                    <li><a href="ui-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                                    <li><a href="ui-progressbars.html" data-key="t-progress-bars">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert.html" data-key="t-sweet-alert">Sweet-Alert</a></li>
                                    <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html" data-key="t-typography">Typography</a></li>
                                    <li><a href="ui-video.html" data-key="t-video">Video</a></li>
                                    <li><a href="ui-general.html" data-key="t-general">General</a></li>
                                    <li><a href="ui-colors.html" data-key="t-colors">Colors</a></li>
                                    <li><a href="ui-rating.html" data-key="t-rating">Rating</a></li>
                                    <li><a href="ui-notifications.html" data-key="t-notifications">Notifications</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-layout icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-forms">Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html" data-key="t-form-elements">Form Elements</a></li>
                                    <li><a href="form-layouts.html" data-key="t-form-layouts">Form Layouts</a></li>
                                    <li><a href="form-validation.html" data-key="t-form-validation">Form Validation</a></li>
                                    <li><a href="form-advanced.html" data-key="t-form-advanced">Form Advanced</a></li>
                                    <li><a href="form-editors.html" data-key="t-form-editors">Form Editors</a></li>
                                    <li><a href="form-uploads.html" data-key="t-form-upload">Form File Upload</a></li>
                                    <li><a href="form-wizard.html" data-key="t-form-wizard">Form Wizard</a></li>
                                    <li><a href="form-mask.html" data-key="t-form-mask">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-table icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-tables">Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html" data-key="t-basic-tables">Basic Tables</a></li>
                                    <li><a href="tables-advanced.html" data-key="t-advanced-tables">Advance Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-pie-chart-alt-2 icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-charts">Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-apex.html" data-key="t-apex-charts">Apex Charts</a></li>
                                    <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">Chartjs Charts</a></li>
                                    <li><a href="charts-tui.html" data-key="t-ui-charts">Toast UI Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-cuboid icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-icons">Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-evaicons.html" data-key="t-evaicons">Eva Icons</a></li>
                                    <li><a href="icons-boxicons.html" data-key="t-boxicons">Boxicons</a></li>
                                    <li><a href="icons-materialdesign.html" data-key="t-material-design">Material Design</a></li>
                                    <li><a href="icons-fontawesome.html" data-key="t-font-awesome">Font Awesome 5</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-map-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-maps">Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html" data-key="t-google">Google</a></li>
                                    <li><a href="maps-vector.html" data-key="t-vector">Vector</a></li>
                                    <li><a href="maps-leaflet.html" data-key="t-leaflet">Leaflet</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" data-key="t-pages">Pages</li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="bx bx-user-pin icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-authentication">Authentication</span>
                                    <span class="badge rounded-pill bg-info">8</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html" data-key="t-login">Login</a></li>
                                    <li><a href="auth-register.html" data-key="t-register">Register</a></li>
                                    <li><a href="auth-recoverpw.html" data-key="t-recover-password">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html" data-key="t-lock-screen">Lock Screen</a></li>
                                    <li><a href="auth-logout.html" data-key="t-logout">Logout</a></li>
                                    <li><a href="auth-confirm-mail.html" data-key="t-confirm-mail">Confirm Mail</a></li>
                                    <li><a href="auth-email-verification.html" data-key="t-email-verification">Email Verification</a></li>
                                    <li><a href="auth-two-step-verification.html" data-key="t-two-step-verification">Two Step Verification</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-file icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-utility">Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html" data-key="t-starter-page">Starter Page</a></li>
                                    <li><a href="pages-maintenance.html" data-key="t-maintenance">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html" data-key="t-coming-soon">Coming Soon</a></li>
                                    <li><a href="pages-timeline.html" data-key="t-timeline">Timeline</a></li>
                                    <li><a href="pages-faqs.html" data-key="t-faqs">FAQs</a></li>
                                    <li><a href="pages-pricing.html" data-key="t-pricing">Pricing</a></li>
                                    <li><a href="pages-404.html" data-key="t-error-404">Error 404</a></li>
                                    <li><a href="pages-500.html" data-key="t-error-500">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-share-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a></li>
                                    <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header class="ishorizontal-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="admin/images/logo-dark-sm.png" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="admin/images/logo-dark.png" alt="" height="28">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="admin/images/logo-light-sm.png" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="admin/images/logo-light.png" alt="" height="30">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Hi, Welcome Back!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block language-switch ms-2 ms-xl-3">
                            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="header-lang-img" src="admin/images/flags/us.jpg" alt="Header Language" height="18">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="admin/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="admin/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="admin/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="admin/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="admin/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell icon-sm align-middle"></i>
                                <span class="noti-dot bg-danger rounded-pill">4</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-15"> Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="admin/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="admin/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="admin/images/users/avatar-3.jpg"
                                alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Martin Gurley</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Martin Gurley</h6>
                                    <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                                </div>
                                <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Help</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-home-alt icon nav-icon"></i>
                                            <span data-key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <a href="index.html"  class="dropdown-item" data-key="t-ecommerce">Ecommerce</a>
                                            <a href="dashboard-sales.html"  class="dropdown-item" data-key="t-sales">Sales</a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cube icon nav-icon"></i>
                                           <span data-key="t-elements">Elements</span> <div class="arrow-down"></div>
                                        </a>

                                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                            <div class="ps-2 p-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <div class="menu-title">Elements</div>
                                                            <div class="row g-0">
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                        <a href="ui-buttons.html" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                        <a href="ui-cards.html" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                        <a href="ui-carousel.html" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                        <a href="ui-dropdowns.html" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                        <a href="ui-grid.html" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                        <a href="ui-images.html" class="dropdown-item" data-key="t-images">Images</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-lightbox.html" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                                        <a href="ui-modals.html" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                        <a href="ui-offcanvas.html" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                        <a href="ui-rangeslider.html" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                                        <a href="ui-progressbars.html" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                        <a href="ui-sweet-alert.html" class="dropdown-item" data-key="t-sweet-alert">Sweet-Alert</a>
                                                                        <a href="ui-tabs-accordions.html" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                        <a href="ui-video.html" class="dropdown-item" data-key="t-video">Video</a>
                                                                        <a href="ui-general.html" class="dropdown-item" data-key="t-general">General</a>
                                                                        <a href="ui-colors.html" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                        <a href="ui-rating.html" class="dropdown-item" data-key="t-rating">Rating</a>
                                                                        <a href="ui-notifications.html" class="dropdown-item" data-key="t-notifications">Notifications</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                            <i class="bx bx-store icon nav-icon"></i>
                                            <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                            <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>

                                            <a href="apps-todo.html" class="dropdown-item" data-key="t-todo">Todo</a>

                                            <a href="apps-file-manager.html" class="dropdown-item" data-key="t-filemanager">File Manager</a>

                                            <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>


                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                    role="button">
                                                    <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                    <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                                    <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                                    <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                                    <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                                    <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                                    <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                                    <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                                    <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                    role="button">
                                                    <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                    <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                                    <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                                    role="button">
                                                   <span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                                    <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                                    <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                    role="button">
                                                   <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                    <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                                    <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                                    <a href="contacts-profile.html" class="dropdown-item" data-key="t-user-profile">Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                            <i class="bx bx-layer icon nav-icon"></i>
                                            <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                    role="button">
                                                    <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                    <a href="form-elements.html" class="dropdown-item" data-key="t-form-elements">Form Elements</a>
                                                    <a href="form-layouts.html" class="dropdown-item" data-key="t-form-layouts">Form Layouts</a>
                                                    <a href="form-validation.html" class="dropdown-item" data-key="t-form-validation">Form Validation</a>
                                                    <a href="form-advanced.html" class="dropdown-item" data-key="t-form-advanced">Form Advanced</a>
                                                    <a href="form-editors.html" class="dropdown-item" data-key="t-form-editors">Form Editors</a>
                                                    <a href="form-uploads.html" class="dropdown-item" data-key="t-form-upload">Form File Upload</a>
                                                    <a href="form-wizard.html" class="dropdown-item" data-key="t-form-wizard">Form Wizard</a>
                                                    <a href="form-mask.html" class="dropdown-item" data-key="t-form-mask">Form Mask</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                    role="button">
                                                    <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                    <a href="tables-basic.html" class="dropdown-item" data-key="t-basic-tables">Basic Tables</a>
                                                    <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                    role="button">
                                                    <span data-key="t-charts">Charts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                    <a href="charts-apex.html" class="dropdown-item" data-key="t-apex-charts">Apex Charts</a>
                                                    <a href="charts-chartjs.html" class="dropdown-item" data-key="t-chartjs-charts">Chartjs Charts</a>
                                                    <a href="charts-tui.html" class="dropdown-item" data-key="t-ui-charts">Toast UI Charts</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                    role="button">
                                                    <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="icons-evaicons.html" class="dropdown-item" data-key="t-evaicons">Eva Icons</a>
                                                    <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                                    <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                                    <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                    role="button">
                                                    <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                    <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                                    <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                                    <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                            <i class="bx bx-file icon nav-icon"></i>
                                            <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-authentication"
                                                    role="button">
                                                    <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                                    <a href="auth-login.html" class="dropdown-item" data-key="t-login">Login</a>
                                                    <a href="auth-register.html" class="dropdown-item" data-key="t-register">Register</a>
                                                    <a href="auth-recoverpw.html" class="dropdown-item" data-key="t-recover-password">Recover Password</a>
                                                    <a href="auth-lock-screen.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                    <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Logout</a>
                                                    <a href="auth-confirm-mail.html" class="dropdown-item" data-key="t-confirm-mail">Confirm Mail</a>
                                                    <a href="auth-email-verification.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                    <a href="auth-two-step-verification.html" class="dropdown-item" data-key="t-two-step-verification">Two Step Verification</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                    role="button">
                                                    <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                    <a href="pages-starter.html" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                                    <a href="pages-maintenance.html" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                                    <a href="pages-comingsoon.html" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                                    <a href="pages-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                                    <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                                    <a href="pages-pricing.html" class="dropdown-item" data-key="t-pricing">Pricing</a>
                                                    <a href="pages-404.html" class="dropdown-item" data-key="t-error-404">Error 404</a>
                                                    <a href="pages-500.html" class="dropdown-item" data-key="t-error-500">Error 500</a>
                                                </div>
                                            </div>

                                            <a href="layouts-horizontal.html" class="dropdown-item" data-key="t-horizontal">Horizontal</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="card-title mb-4">Overview</h5>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="fw-semibold">Sort By:</span>
                                                        <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="overview" data-colors='["#e6ecf9", "#e6ecf9", "#e6ecf9","#e6ecf9", "#e6ecf9", "#e6ecf9","#e6ecf9","#e6ecf9","#e6ecf9","#1f58c7","#1f58c7", "#1f58c7"]' class="apex-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-soft-primary">
                                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Sales</h6>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle" href="#"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                                    <a class="dropdown-item" href="#">Today</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">$34,123.20 <span class="text-success fw-medium font-size-13 align-middle"> <i class="mdi mdi-arrow-up"></i> 8.34% </span> </h4>
                                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-0 text-truncate">Total Sales World Wide</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-soft-primary">
                                                                <i class="bx bx-cart-alt font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Orders</h6>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle" href="#"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                                    <a class="dropdown-item" href="#">Today</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">63,234.20 <span class="text-danger fw-medium font-size-13 align-middle"> <i class="mdi mdi-arrow-down"></i> 3.68% </span> </h4>
                                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-0 text-truncate">Total Orders World Wide</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div id="mini-2" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-soft-primary">
                                                                <i class="bx bx-package font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Today Visitor</h6>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle" href="#"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                                    <a class="dropdown-item" href="#">Today</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">425,34.45 <span class="text-danger fw-medium font-size-13 align-middle"> <i class="mdi mdi-arrow-down"></i> 2.64% </span> </h4>
                                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-0 text-truncate">Total Visitor World Wide</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div id="mini-3" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar">
                                                            <div class="avatar-title rounded bg-soft-primary">
                                                                <i class="bx bx-rocket font-size-24 mb-0 text-primary"></i>
                                                            </div>
                                                        </div>

                                                        <div class="flex-grow-1 ms-3">
                                                            <h6 class="mb-0 font-size-15">Total Expense</h6>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <div class="dropdown">
                                                                <a class="dropdown-toggle" href="#"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                                    <a class="dropdown-item" href="#">Today</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">6,482.46 <span class="text-success fw-medium font-size-13 align-middle"> <i class="mdi mdi-arrow-down"></i> 5.79% </span> </h4>
                                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-0 text-truncate">Total Expense World Wide</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div id="mini-4" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- end row -->

                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="row">
                                    <div class="col-xl-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title">Popular Products</h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-muted" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                Today<i class="mdi mdi-chevron-down ms-1"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Yearly</a>
                                                                <a class="dropdown-item" href="#">Monthly</a>
                                                                <a class="dropdown-item" href="#">Weekly</a>
                                                                <a class="dropdown-item" href="#">Today</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
                                                    <div class="popular-product-img p-2">
                                                        <img src="admin/images/product/img.png" alt="">
                                                    </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <span class="badge badge-soft-primary font-size-10 text-uppercase ls-05"> Popular Item</span>
                                                        <h5 class="mt-2 font-size-16"><a href="#" class="text-dark">Home & Office Chair Blue</a></h5>
                                                        <p class="text-muted">But who has any right to find chooses enjoy.</p>

                                                        <div class="row g-0 mt-3 pt-1 align-items-end">
                                                            <div class="col-4">
                                                                <div class="mt-1">
                                                                    <h4 class="font-size-16">800</h4>
                                                                    <p class="text-muted mb-1">Total Selling</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="mt-1">
                                                                    <h4 class="font-size-16">250</h4>
                                                                    <p class="text-muted mb-1">Total Stock</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="mt-1">
                                                                    <a href="#" class="btn btn-primary btn-sm mb-1">Buy
                                                                        Now</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mx-n4 px-4" data-simplebar style="max-height: 205px;">
                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-md">
                                                                    <div class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
                                                                        <img src="admin/images/product/img-1.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="mb-1 text-truncate"><a href="#" class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end ms-3">
                                                                <h5 class="mb-1"><a href="#" class="font-size-15 text-dark">$62300.00</a></h5>
                                                                <p class="text-muted fw-semibold mb-0">562 Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-md">
                                                                        <div class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                                            <img src="admin/images/product/img-8.png" class="img-fluid" alt="">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="mb-1 text-truncate"><a href="#" class="font-size-15 text-dark">Home & Office Chair Crime</a></h5>
                                                                <p class="text-muted fw-semibold mb-0 text-truncate">$190.00</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end ms-3">
                                                                <h5 class="mb-1"><a href="#" class="font-size-15 text-dark">$25698.00</a></h5>
                                                                <p class="text-muted fw-semibold mb-0">856 Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-md">
                                                                    <div class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                                        <img src="admin/images/product/img-3.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="mb-1 text-truncate"><a href="#" class="font-size-15 text-dark">Office Chair Blue</a></h5>
                                                                <p class="text-muted fw-semibold mb-0 text-truncate">$420.00</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end ms-3">
                                                                <h5 class="mb-1"><a href="#" class="font-size-15 text-dark">$64351.00</a></h5>
                                                                <p class="text-muted fw-semibold mb-0">524 Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-md">
                                                                    <div class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                                        <img src="admin/images/product/img-4.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="mb-1 text-truncate"><a href="#" class="font-size-15 text-dark">Home & Office Chair Green</a></h5>
                                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end ms-3">
                                                                <h5 class="mb-1"><a href="#" class="font-size-15 text-dark">$96485.00</a></h5>
                                                                <p class="text-muted fw-semibold mb-0">634 Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="popular-product-box rounded my-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <div class="avatar-md">
                                                                    <div class="product-img avatar-title img-thumbnail bg-soft-danger border-0" >
                                                                        <img src="admin/images/product/img-5.png" class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="mb-1 text-truncate"><a href="#" class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end ms-3">
                                                                <h5 class="mb-1"><a href="#" class="font-size-15 text-dark">$56230.00</a></h5>
                                                                <p class="text-muted fw-semibold mb-0">964 Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start mb-2">
                                                    <div class="flex-grow-1">
                                                        <h5 class="card-title">Loyal Customers</h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-muted" href="#"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal font-size-22"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Yearly</a>
                                                                <a class="dropdown-item" href="#">Monthly</a>
                                                                <a class="dropdown-item" href="#">Weekly</a>
                                                                <a class="dropdown-item" href="#">Today</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mx-n4 px-4" data-simplebar style="max-height: 421px;">
                                                    <div class="border-bottom loyal-customers-box pt-2">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-4.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Michelle Bernard</h5>
                                                                <p class="text-muted text-truncate mb-0">Michelle@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    4.7 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom loyal-customers-box">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-5.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">David Grajeda</h5>
                                                                <p class="text-muted text-truncate mb-0">David@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    3.4 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom loyal-customers-box">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-6.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Charles Roman</h5>
                                                                <p class="text-muted text-truncate mb-0">Charles@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    4.9 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom loyal-customers-box">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-7.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">David Reynolds</h5>
                                                                <p class="text-muted text-truncate mb-0">David@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    3.5 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="border-bottom loyal-customers-box">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-8.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Marion Munroe</h5>
                                                                <p class="text-muted text-truncate mb-0">Marion@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    2.3 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="py-3 loyal-customers-box">
                                                        <div class="d-flex align-items-center">
                                                            <img src="admin/images/users/avatar-5.jpg" class="rounded-circle avatar img-thumbnail" alt="">
                                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Christina Emerson</h5>
                                                                <p class="text-muted text-truncate mb-0">Christina@gmail.com</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                                    4.1 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="card-title mb-4 text-truncate">Top Selling Categories</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="fw-semibold">Sort By:</span> <span
                                                            class="text-muted">Weekly<i
                                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="saleing-categories" data-colors='["#1f58c7", "#4976cf","#6a92e1", "#e6ecf9"]' class="apex-charts" dir="ltr"></div>

                                        <div class="row mt-3 pt-1">
                                            <div class="col-md-6">
                                                <div class="px-2 mt-2">
                                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                        <i class="mdi mdi-circle font-size-10 text-primary"></i>
                                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                                            <p class="font-size-15 mb-1 text-truncate">Men Fashion</p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <span class="fw-bold">34.3%</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center mt-2">
                                                        <i class="mdi mdi-circle font-size-10 text-success"></i>
                                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                                            <p class="font-size-15 mb-0 text-truncate">Women Clothing</p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <span class="fw-bold">25.7%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="px-2 mt-2">
                                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                                        <i class="mdi mdi-circle font-size-10 text-info"></i>
                                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                                            <p class="font-size-15 mb-1 text-truncate">Beauty Products</p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <span class="fw-bold">18.6%</span>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-center mt-2">
                                                        <i class="mdi mdi-circle font-size-10 text-secondary"></i>
                                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                                            <p class="font-size-15 mb-0 text-truncate">Others Products</p>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-2">
                                                            <span class="fw-bold">21.4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                                <div class="col-xl-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h5 class="card-title">Sales Revenue</h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <span class="fw-semibold">Year:</span> <span
                                                                class="text-muted">2021<i
                                                                    class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">2019</a>
                                                            <a class="dropdown-item" href="#">2020</a>
                                                            <a class="dropdown-item" href="#">2021</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-xxl-7">
                                                    <div class="py-3">
                                                        <div id="world-map-markers" style="height: 300px"></div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-5">
                                                    <div class="table-responsive">
                                                            <table class="table table-centered align-middle table-nowrap mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 500px;">Countries</th>
                                                                        <th>Orders</th>
                                                                        <th>Earnings</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <img src="admin/images/flags/us.jpg" class="rounded" alt="user-image" height="18">
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <p class="mb-0 text-truncate">United States</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>46k</td>
                                                                        <td>$6,524.30</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <img src="admin/images/flags/italy.jpg" class="rounded" alt="user-image" height="18">
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <p class="mb-0 text-truncate">Italy</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>86k</td>
                                                                        <td>$6,985.94</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <img src="admin/images/flags/spain.jpg" class="rounded" alt="user-image" height="18">
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <p class="mb-0 text-truncate">Spain</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>86k</td>
                                                                        <td>$5,685.47</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <img src="admin/images/flags/french.jpg" class="rounded" alt="user-image" height="18">
                                                                                <div class="flex-grow-1 ms-3">
                                                                                    <p class="mb-0 text-truncate">French</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>56k</td>
                                                                        <td>$5,645.45</td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap align-items-center mb-3">
                                                <h5 class="card-title me-2">Invoice List</h5>
                                                <div class="ms-auto">
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted font-size-12">Sort By: </span> <span class="fw-medium"> Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                            <a class="dropdown-item" href="#">Monthly</a>
                                                            <a class="dropdown-item" href="#">Yearly</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mx-n4 px-4" data-simplebar style="max-height: 332px;">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                                        <thead>
                                                            <tr>
                                                                <th style="width: 30px;">
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                                        <label class="form-check-label" for="checkAll"></label>
                                                                    </div>
                                                                </th>
                                                                <th>#Invoice</th>
                                                                <th style="width: 190px;">User Name</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#562354</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-1.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Neal Matthews
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                10 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#485625</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-2.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Connie Franco
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                10 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#321458</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-3.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Adella Perez
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                12 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-danger font-size-12">Unpaid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#214569</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-4.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Theresa Mayers
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                21 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#565423</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-5.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Oliver Gonzales
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                25 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-danger font-size-12">Unpaid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-check font-size-16">
                                                                        <input type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label"></label>
                                                                    </div>
                                                                </td>
                                                                <td class="fw-semibold">#565423</td>
                                                                <td style="width: 190px;">
                                                                    <div class="d-flex align-items-center">
                                                                        <img class="rounded-circle avatar-sm" src="admin/images/users/avatar-6.jpg" alt="">
                                                                        <div class="flex-grow-1 ms-3">
                                                                            Willie Verner
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                30 Dec
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-soft-success font-size-12">Paid</div>
                                                                </td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                                        </a>

                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <a class="dropdown-item" href="#">Edit</a>
                                                                            <a class="dropdown-item" href="#">Print</a>
                                                                            <a class="dropdown-item" href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © webadmin.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesdesign.com/" target="_blank" class="text-reset">Themesdesign</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <a href="#" class="right-bar-toggle layout-setting-btn" id="right-bar-toggle">
            <i class="bx bx-cog icon-sm font-size-18"></i> <span>Settings</span>
        </a>

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode"
                            id="layout-mode-bordered" value="bordered">
                        <label class="form-check-label" for="layout-mode-bordered">Bordered</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width"
                            id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position"
                            id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3">Topbar Type</h6>


                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color"
                            id="topbar-type-hidden" value="hidden" onchange="document.body.setAttribute('data-topbar', 'hidden')">
                        <label class="form-check-label" for="topbar-type-hidden">Hidden</label>
                    </div>


                    <div id="sidebar-setting">
                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size"
                            id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color"
                            id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>
                </div>

                    <h6 class="mt-4 mb-3">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- chat offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivity" aria-labelledby="offcanvasActivityLabel">
            <div class="offcanvas-header border-bottom">
              <h5 id="offcanvasActivityLabel">Offcanvas right</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              ...
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/libs/metismenujs/metismenujs.min.js"></script>
        <script src="admin/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/libs/eva-icons/eva.min.js"></script>

        <!-- apexcharts -->
        <script src="admin/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="admin/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="admin/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="admin/js/pages/dashboard.init.js"></script>

        <script src="admin/js/app.js"></script>

    </body>

</html>
