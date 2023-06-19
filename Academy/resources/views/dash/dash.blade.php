
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fervidbridge - Dashboard</title>
    <meta name="description" content="Fervidbridge">
    <meta name="keywords" content="Fervidbridge">
    <link rel="shortcut icon" href="https://app.fervidbridge.org/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://app.fervidbridge.org/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Fervidbridge - Dashboard">
    
    <meta itemprop="name" content="Fervidbridge - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://app.fervidbridge.org/assets/images/seo/630394cc85df41661179084.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="fervidbridge">
    <meta property="og:description" content="fervidbridge">
    <meta property="og:image" content="https://app.fervidbridge.org/assets/images/seo/630394cc85df41661179084.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://app.fervidbridge.org/user/dashboard">
    <style></style>
    <meta name="twitter:card" content="summary_large_image">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo:300,400,600,700|Open+Sans: 400,500,700&display=swap" />

    <link rel="stylesheet" href="https://app.fervidbridge.org/assets/templates/neo_dark/assets/css/bootstrap.min.css" id="bootstrap-style" type="text/css" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="https://app.fervidbridge.org/assets/templates/neo_dark/assets/css/icons.min.css" type="text/css">

    <link rel="stylesheet" href="https://app.fervidbridge.org/assets/templates/neo_dark/assets/css/app.min.css" id="app-style" type="text/css" />
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body data-sidebar="dark">


    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="https://fervidbridge.org" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="https://app.fervidbridge.org/assets/images/logoIcon/fervidbridgeicon.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="https://app.fervidbridge.org/assets/images/logoIcon/fervidbridgelogo.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="https://fervidbridge.org" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="https://app.fervidbridge.org/assets/images/logoIcon/fervidbridgeicon.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="https://app.fervidbridge.org/assets/images/logoIcon/fervidbridgelogo.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>


                    </div>

                    <div class="d-flex">


                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/images/flags/globe.png" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <div class="text-center" id="ytWidget"></div>
                <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-customize"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0);" class="small" key="t-view-all"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="https://app.fervidbridge.org/placeholder-image/800x800"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">versatile</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="https://app.fervidbridge.org/user/profile-setting"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="https://app.fervidbridge.org/user/transfer-balance"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">Transfer Balance</span></a>
                                <a class="dropdown-item d-block" href="https://app.fervidbridge.org/user/change-password"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Change Password</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="https://app.fervidbridge.org/logout"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                        <!--<div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div> -->

                    </div>
                </div>
            </header>
            


    <!-- header-section end  -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>


                            <li>
                                <a href="https://app.fervidbridge.org/user/dashboard" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">Activity</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase"></i>
                                    <span>Packages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="https://app.fervidbridge.org/user/plan" key="t-products">Activate Package</a></li>
                                    <li><a href="https://app.fervidbridge.org/user/interest/log">My Packages</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="https://app.fervidbridge.org/user/transactions/interest-wallet" class="waves-effect">
                                    <i class="bx bx-trending-up"></i>
                                    <span>Interest</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-wallet-alt"></i>
                                    <span>Funds</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="https://app.fervidbridge.org/user/deposit">Add Funds</a></li>
                                    <li><a href="https://app.fervidbridge.org/user/deposit/history" >Funds History</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-direction-left"></i>
                                    <span>Withdrawal</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="https://app.fervidbridge.org/user/withdraw">Withdraw</a></li>
                                    <li><a href="https://app.fervidbridge.org/user/withdraw/history">Withdrawal History</a></li>
                                </ul>
                            </li>
                            
                                    <li>
                                <a href="https://app.fervidbridge.org/user/transactions/deposit-wallet" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span>Transaction Log</span>
                                </a>
                            </li>
        
                            <li class="menu-title">Tools</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Affiliates</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    
                                            <li><a href="https://app.fervidbridge.org/user/referral/users">Afiliate users</a></li>
                                                    <li><a href="https://app.fervidbridge.org/user/referral/commissions/deposit" key="t-product-detail">Affiliate Commissions</a></li>
                                        </ul>
                            </li>
                            
                
                            <li>
                                <a href="https://app.fervidbridge.org/user/transfer-balance" class="waves-effect">
                                    <i class="mdi mdi-book-arrow-right"></i>
                                    <span>Transfer Balance</span>
                                </a>
                            </li>
                

                            <li class="menu-title" key="t-apps">Security</li>
                            
                                    <li>
                                <a href="https://app.fervidbridge.org/user/twofactor" class="waves-effect">
                                    <i class="bx bx-shield-quarter"></i>
                                    <span>2FA security</span>
                                </a>
                            </li>
        

                            <li class="menu-title">Need help?</li>
                            
                                    <li>
                                <a href="https://app.fervidbridge.org/ticket" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span>Submit a Ticket</span>
                                </a>
                            </li>
        
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



        <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="https://app.fervidbridge.org">home</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary bg-soft">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back versatile!</h5>
                                                    <p> Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="https://app.fervidbridge.org/assets/images/logoIcon/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">eze cecc</h5>
                                                <p class="text-muted mb-0 text-truncate">versatile</p>
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">Jun 04, 2023</h5>
                                                            <p class="text-muted mb-0">Registeration Date</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">Jun - 19 - 2023 / 07:48:14 AM</h5>
                                                            <p class="text-muted mb-0">Last Access</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="https://app.fervidbridge.org/user/profile-setting" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
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
                                        <h4 class="card-title mb-4">Earning</h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="text-muted"></p>
                                                <h3>$0</h3>
                                                <p class="text-muted"><span class="text-success me-2"> 100% <i class="mdi mdi-arrow-up"></i> </span> From account open</p>

                                                <div class="mt-4">
                                                    <a href="https://app.fervidbridge.org/user/interest/log" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Invest</p>
                                                        <h4 class="mb-0">$0</h4>
                                                        <a href="https://app.fervidbridge.org/user/interest/log"
                                           class="btn btn-primary btn-small d-block text-center style--two">View report</a>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Fundings</p>
                                                        <h4 class="mb-0">$10</h4>
                                                        <a href="https://app.fervidbridge.org/user/deposit/history"
                                                   class="btn btn-primary btn-small d-block text-center style--two">View report</a>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Tickets</p>
                                                        <h4 class="mb-0">0</h4>
                                                        <a href="https://app.fervidbridge.org/ticket"
                                           class="btn btn-primary btn-small d-block text-center style--two">View report</a>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/images/users/depositsiicon.png" alt="" class="avatar-sm rounded-circle img-thumbnail">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">
                                                            <h5 class="mb-1">Total Deposit</h5>
                                                            <p class="mb-0">$0.00</p>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0 dropdown ms-2">
                                                        <a href="https://app.fervidbridge.org/user/deposit" class="btn btn-light btn-sm" type="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bxs-wallet-alt"></i> Add Funds
                                                        </a>
                                                    </div>  
                                                </div>
                                            </div>

                                            
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/images/users/withdrawiconn.png" alt="" class="avatar-sm rounded-circle img-thumbnail">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <div class="text-muted">
                                                            <h5 class="mb-1">Total Withdrawal</h5>
                                                            <p class="mb-0">$0.00</p>
                                                        </div>
                                                    </div>

                                                    <div class="flex-shrink-0 dropdown ms-2">
                                                        <a href="https://app.fervidbridge.org/user/withdraw" class="btn btn-light btn-sm" type="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bxs-direction-left"></i> Withdraw
                                                        </a>
                                                    </div>  
                                                </div>
                                            </div>

                                            
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                        </div>
                        
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1 align-self-center">
                                                <div class="text-muted">
                                                    <h5>AFFILIATE PROGRAM</h5>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a href="https://app.fervidbridge.org/user/referral/users" type="button" class="btn btn-light" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i> <span class="d-none d-sm-inline-block">Visit <i class="mdi mdi-chevron-down"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th class="align-middle">Action</th>
                                                        <th class="align-middle">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">Last Deposit</a> </td>
                                                        <td>
                                                $
                                                                                                    0.00
                                                                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">Last Withdrawal</a> </td>
                                                        <td>
                                                $
                                                                                                    0.00
                                                                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Transactions</h4>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0">
                                                <thead>
                                                  <tr>
                                                    <th>Date</th>
                                                    <th>Transaction ID</th>
                                                    <th>Amount</th>
                                                    <th>Wallet</th>
                                                    <th>Details</th>
                                                    <th>Post Balance</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                                                                    <tr>
                                                    <td data-label="Date">04/06/2023</td>
                                                    <td data-label="Transaction ID"><span class="text-primary">K9DEYFHFTYFA</span></td>

                                                    <td data-label="Amount">
                                                                                                            <span class="text-success">+ $10</span>
                                                                                                          </td>
                                                    <td data-label="Wallet">
                                                                                                            <span class="badge badge-info">Deposit Wallet</span>
                                                                                                          </td>
                                                    <td data-label="Details">You have got Sign Up Bonus</td>
                                                    <td data-label="Post Balance"><span> $10</span></td>
                                                  </tr>
                                                                                                  </tbody>
                                              </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        
                        
                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

    




    

        
    



<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/jquery-3.3.1.min.js"></script>
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/bootstrap.min.js"></script>

        <!-- JAVASCRIPT -->
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/jquery/jquery.min.js"></script>
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- dashboard init -->
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="https://app.fervidbridge.org/assets/templates/neo_dark/assets/js/app.js"></script>


           <!-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Fervidbridge.
                            </div>
                        </div>
                    </div>
                </footer>
             end main content-->
            </div>

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar 
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>-->

                <!-- Settings 
                <hr class="mt-0" />

                <div class="p-4">

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked disabled>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" disabled>
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

            
                </div>

            </div>--> <!-- end slimscroll-menu
        </div>-->
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

<link rel="stylesheet" href="https://app.fervidbridge.org/assets/templates/neo_dark/css/iziToast.min.css">
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/iziToast.min.js"></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>



<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/jquery.nice-select.min.js"></script>
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/slick.min.js"></script>
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/wow.min.js"></script>
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/vendor/viewport.jquery.js"></script>
<script src="https://app.fervidbridge.org/assets/templates/neo_dark/js/main.js"></script>


    <script>
        $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://app.fervidbridge.org/change/" + $(this).val();
        });
    })();
</script>


</body>
</html>
