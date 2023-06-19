
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fervidbridge - Deposit History</title>
    <meta name="description" content="Fervidbridge">
    <meta name="keywords" content="Fervidbridge">
    <link rel="shortcut icon" href="https://app.fervidbridge.org/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://app.fervidbridge.org/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Fervidbridge - Deposit History">
    
    <meta itemprop="name" content="Fervidbridge - Deposit History">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://app.fervidbridge.org/assets/images/seo/630394cc85df41661179084.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="fervidbridge">
    <meta property="og:description" content="fervidbridge">
    <meta property="og:image" content="https://app.fervidbridge.org/assets/images/seo/630394cc85df41661179084.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://app.fervidbridge.org/user/deposit/history">
    
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
                                    <h4 class="mb-sm-0 font-size-18">Deposit History</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="https://app.fervidbridge.org">home</a></li>
                                            <li class="breadcrumb-item active">Deposit History</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    <section class="feature-section pt-150 pb-150">
        <div class="container">
            <div class="row justify-content-center mt-2">

                <div class="col-md-12">
                    <div class="text-right mb-5">
                        <a href="https://app.fervidbridge.org/user/deposit" class="btn btn-primary">Deposit Now</a>
                    </div>
                </div>


                <div class="col-md-12">

                    <div class="table-responsive--sm neu--table">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Gateway</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Time</th>
                                <th scope="col"> MORE</th>
                            </tr>
                            </thead>
                            <tbody>
                                                            <tr>
                                    <td colspan="6"> No history found.</td>
                                </tr>
                                                        </tbody>
                        </table>

                        
                    </div>

                </div>
            </div>
        </div>
    </section>


    
    <div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h5 class="modal-title">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group withdraw-list">
                        <li class="list-group-item dark-bg">Amount : <span class="withdraw-amount "></span></li>
                        <li class="list-group-item dark-bg">Charge : <span class="withdraw-charge "></span></li>
                        <li class="list-group-item dark-bg">After Charge : <span class="withdraw-after_charge"></span></li>
                        <li class="list-group-item dark-bg">Conversion Rate : <span class="withdraw-rate"></span></li>
                        <li class="list-group-item dark-bg">Payable Amount : <span class="withdraw-payable"></span></li>
                    </ul>
                    <ul class="list-group withdraw-list withdraw-detail mt-1">
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    
    <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h5 class="modal-title">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="withdraw-detail"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    

        
    



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
        $(document).ready(function () {
            "use strict";
            $('.approveBtn').on('click', function () {
                var modal = $('#approveModal');
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.find('.withdraw-charge').text($(this).data('charge'));
                modal.find('.withdraw-after_charge').text($(this).data('after_charge'));
                modal.find('.withdraw-rate').text($(this).data('rate'));
                modal.find('.withdraw-payable').text($(this).data('payable'));
                var list = [];
                var details = Object.entries($(this).data('info'));
                var ImgPath = "https://app.fervidbridge.org/assets/images/verify/deposit/";

                var singleInfo = '';
                for (var i = 0; i < details.length; i++) {
                    if (details[i][1].type == 'file') {
                        singleInfo += `<li class="list-group-item">
                                        <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <img src="${ImgPath}/${details[i][1].field_name}" alt="..." class="w-100">
                                    </li>`;
                    }else{
                        singleInfo += `<li class="list-group-item">
                                        <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <span class="font-weight-bold ml-3">${details[i][1].field_name}</span>
                                    </li>`;
                    }
                }
                modal.find('.withdraw-detail').html(`<strong class="my-3">Payment Information</strong>  ${singleInfo}`);
                modal.modal('show');
            });


            $('.detailBtn').on('click', function () {
                var modal = $('#detailModal');
                var feedback = $(this).data('admin_feedback');
                modal.find('.withdraw-detail').html(`<p> ${feedback} </p>`);
                modal.modal('show');
            });

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
