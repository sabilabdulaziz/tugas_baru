<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Streamit  - Responsive Bootstrap 4 Admin Dashboard Template</title>
   <!-- Favicon -->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{asset('assets/css/typography.css')}}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body class="sidebar-main-active right-column-fixed">
   <!-- loader Start -->
   <div id="loading">
      <div id="loading-center">
      </div>
   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html" class="header-logo">
               <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Streamit </span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">

                 <li><a href="{{route('dashboard')}}" class="iq-waves-effect">
                  <i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a>
               </li>
               <li>
                  <a href="{{route('user_menu')}}" class="iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a>
               </li>
               <li><a href="pages-pricing.html" class="iq-waves-effect"><i class="ri-price-tag-line"></i><span>Pricing</span></a></li>

               <li>
                  <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li class="elements">
                        <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                           <li><a href="ui-colors.html"><i class="las la-palette"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="las la-keyboard"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="las la-tag"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="lab la-atlassian"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="las la-bars"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="las la-tablet"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="las la-credit-card"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="las la-film"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="las la-video"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="las la-border-all"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="las la-images"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="las la-list"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="las la-ad"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="las la-columns"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="las la-bell"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="las la-ellipsis-h"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="las la-eraser"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="las la-hdd"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="las la-database"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="las la-magnet"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li class="form">
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                           <li><a href="form-layout.html"><i class="las la-book"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                           <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                           <li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-database-line"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-refund-line"></i>Editable Table</a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-line"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-line"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-line"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                           <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>

                           <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>

            </ul>
         </nav>

      </div>
   </div>
   <!-- TOP Nav Bar -->
   <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
         <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
               <div class="wrapper-menu">
                  <div class="main-circle"><i class="las la-bars"></i></div>
               </div>
               <div class="iq-navbar-logo d-flex justify-content-between">
                  <a href="index.html" class="header-logo">
                     <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="">
                     <div class="logo-title">
                        <span class="text-primary text-uppercase">Streamit </span>
                     </div>
                  </a>
               </div>
            </div>
            <div class="iq-search-bar ml-auto">
               <form action="#" class="searchbox">
                  <input type="text" class="text search-input" placeholder="Search Here...">
                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
               </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
               <i class="ri-menu-3-line"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto navbar-list">
                  <li class="nav-item nav-icon search-content">
                     <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                        <i class="ri-search-line"></i>
                     </a>
                     <form action="#" class="search-box p-0">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </li>
                  <li class="nav-item nav-icon">
                     <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                        <i class="ri-notification-2-fill"></i>
                        <span class="bg-primary dots"></span>
                     </a>
                     <div class="iq-sub-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                              </div>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Emma Watson Barry</h6>
                                       <small class="float-right font-size-12">Just Now</small>
                                       <p class="mb-0">95 MB</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">New customer is join</h6>
                                       <small class="float-right font-size-12">5 days ago</small>
                                       <p class="mb-0">Cyst Barry</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Two customer is left</h6>
                                       <small class="float-right font-size-12">2 days ago</small>
                                       <p class="mb-0">Cyst Barry</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card" >
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">New Mail from Fenny</h6>
                                       <small class="float-right font-size-12">3 days ago</small>
                                       <p class="mb-0">Cyst Barry</p>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item nav-icon dropdown">
                     <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span class="bg-primary count-mail"></span>
                     </a>
                     <div class="iq-sub-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0 ">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                              </div>
                              <a href="#" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/01.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Barry Emma Watson</h6>
                                       <small class="float-left font-size-12">13 Jun</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/02.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                       <small class="float-left font-size-12">20 Apr</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/03.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Why do we use it?</h6>
                                       <small class="float-left font-size-12">30 Jun</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/04.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Variations Passages</h6>
                                       <small class="float-left font-size-12">12 Sep</small>
                                    </div>
                                 </div>
                              </a>
                              <a href="#" class="iq-sub-card">
                                 <div class="media align-items-center">
                                    <div class="">
                                       <img class="avatar-40 rounded" src="../assets/images/user/05.jpg" alt="">
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                       <small class="float-left font-size-12">5 Dec</small>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </li>

                  <li class="line-height pt-3">
                     <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                        <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">

                     </a>
                     <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                           <div class="iq-card-body p-0 ">
                              <div class="bg-primary p-3">
                                 <h5 class="mb-0 text-white line-height">Hello Barry Tech</h5>
                                 <span class="text-white font-size-12">Available</span>
                              </div>
                              <a href="{{route('profil1')}}" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="ri-file-user-line"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">My Profile</h6>
                                       <p class="mb-0 font-size-12">View personal profile details.</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="{{route('profilMenu')}}" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="ri-profile-line"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Edit Profile</h6>
                                       <p class="mb-0 font-size-12">Modify your personal details.</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="{{route('account-settings')}}" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="ri-account-box-line"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Account settings</h6>
                                       <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                    </div>
                                 </div>
                              </a>
                              <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                 <div class="media align-items-center">
                                    <div class="rounded iq-card-icon iq-bg-primary">
                                       <i class="ri-lock-line"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                       <h6 class="mb-0 ">Privacy Settings</h6>
                                       <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                    </div>
                                 </div>
                              </a>
                              <div class="d-inline-block w-100 text-center p-3">
                                 <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
   <!-- TOP Nav Bar END -->
   <!-- Page Content  -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row profile-content">
            <div class="col-12 col-md-12 col-lg-4">
               <div class="iq-card">
                  <div class="iq-card-body profile-page">
                     <div class="profile-header">
                        <div class="cover-container text-center">
                           <img src="../assets/images/user/1.jpg" alt="profile-bg" class="rounded-circle img-fluid">
                           <div class="profile-detail mt-3">
                              <h3>Barry Tech</h3>
                              <p class="text-primary">Web designer</p>
                              <p>Phasellus faucibus mollis pharetra. Proin blandit ac massa.Morbi nulla dolor, ornare at commodo non, feugiat non nisi.</p>
                           </div>
                           <div class="iq-social d-inline-block align-items-center">
                              <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                 <li>
                                    <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 </li>
                                 <li>
                                    <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                 </li>
                                 <li >
                                    <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                     <div class="iq-header-title">
                        <h4 class="card-title mb-0">Personal Details</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <ul class="list-inline p-0 mb-0">
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Birthday</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">3rd March</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Address</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">Landon</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Phone</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">(010)987 543 201</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Email</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">Barry@example.com</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Twitter</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">@Barry</p>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="row align-items-center justify-content-between mb-3">
                              <div class="col-sm-6">
                                 <h6>Facebook</h6>
                              </div>
                              <div class="col-sm-6">
                                 <p class="mb-0">@Barry_Tech</p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                     <div class="iq-header-title">
                        <h4 class="card-title mb-0">Skill Progress</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <ul class="list-inline p-0 mb-0">
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-3">
                              <h6>Biography</h6>
                              <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                 <div class="iq-progress-bar iq-bg-primary">
                                    <span class="bg-primary" data-percent="70"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-3">
                              <h6>Horror</h6>
                              <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                 <div class="iq-progress-bar iq-bg-danger">
                                    <span class="bg-danger" data-percent="50"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between mb-3">
                              <h6>Comic Book</h6>
                              <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                 <div class="iq-progress-bar iq-bg-info">
                                    <span class="bg-info" data-percent="65"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="d-flex align-items-center justify-content-between">
                              <h6>Adventure</h6>
                              <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                                 <div class="iq-progress-bar iq-bg-success">
                                    <span class="bg-success" data-percent="85"></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8">
               <div class="row">
                  <div class="col-md-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Latest Uploads</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Documentation</h6>
                                    <p class="mb-0">48kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" role="menu" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false">
                                          <i class="ri-more-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right p-0">
                                          <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-image-fill"></i></span></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Images</h6>
                                    <p class="mb-0">204kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" role="menu" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="false">
                                          <i class="ri-more-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right p-0" style="">
                                          <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-video-fill"></i></span></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Videos</h6>
                                    <p class="mb-0">509kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" role="menu" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="false">
                                          <i class="ri-more-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right p-0">
                                          <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-file-3-fill"></i></span></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Resources</h6>
                                    <p class="mb-0">48kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" role="menu" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="false">
                                          <i class="ri-more-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right p-0" style="">
                                          <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="profile-icon bg-secondary"><span><i class="ri-refresh-line"></i></span></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Celine Dion</h6>
                                    <p class="mb-0">204kb</p>
                                 </div>
                                 <div class="iq-card-toolbar">
                                    <div class="dropdown">
                                       <span class="font-size-24" role="menu" id="dropdownMenuButton06" data-toggle="dropdown" aria-expanded="false">
                                          <i class="ri-more-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right p-0">
                                          <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                                          <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Top Books</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 mb-0">
                              <li>
                                 <div class="iq-details mb-2">
                                    <span class="title">Adventure</span>
                                    <div class="percentage float-right text-primary">95 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-primary" data-percent="95"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="iq-details mb-2">
                                    <span class="title">Horror</span>
                                    <div class="percentage float-right text-warning">72 <span>%</span></div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                       <div class="iq-progress-bar">
                                          <span class="bg-warning" data-percent="72"></span>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li>
                               <div class="iq-details mb-2">
                                 <span class="title">Comic Book</span>
                                 <div class="percentage float-right text-info">75 <span>%</span></div>
                                 <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar">
                                       <span class="bg-info" data-percent="75"></span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="iq-details mb-2">
                                 <span class="title">Biography</span>
                                 <div class="percentage float-right text-danger">70 <span>%</span></div>
                                 <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar">
                                       <span class="bg-danger" data-percent="70"></span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="iq-details">
                                 <span class="title">Mystery</span>
                                 <div class="percentage float-right text-success">80 <span>%</span></div>
                                 <div class="iq-progress-bar-linear d-inline-block w-100">
                                    <div class="iq-progress-bar">
                                       <span class="bg-success" data-percent="80"></span>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                  <div class="iq-header-title">
                     <h4 class="card-title mb-0">Daily Sales</h4>
                  </div>
                  <div class="iq-card-header-toolbar d-flex align-items-center">
                     <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                           <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                           <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                           <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                           <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                           <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="iq-card-body">
                <ul class="perfomer-lists m-0 p-0">
                  <li class="d-flex mb-4 align-items-center">
                     <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="../assets/images/user/06.jpg" alt=""></div>
                     <div class="media-support-info ml-3">
                        <h5>Reading on the World</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-dark"><b>+$82</b></span>
                     </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                     <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="../assets/images/user/07.jpg" alt=""></div>
                     <div class="media-support-info ml-3">
                        <h5>Little Black Book</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-dark"><b>+$90</b></span>
                     </div>
                  </li>
                  <li class="d-flex align-items-center">
                     <div class="user-img img-fluid"><img class="img-fluid avatar-50 rounded-circle" src="../assets/images/user/08.jpg" alt=""></div>
                     <div class="media-support-info ml-3">
                        <h5>See the More Story</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-cener">
                        <span class="text-dark"><b>+$85</b></span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
               <div class="iq-header-title">
                  <h4 class="card-title mb-0">Top Products</h4>
               </div>
               <div class="iq-card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                     <span class="dropdown-toggle text-primary" id="dropdownMenuButton07" data-toggle="dropdown">
                        <i class="ri-more-fill"></i>
                     </span>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="iq-card-body">
             <ul class="perfomer-lists m-0 p-0">
               <li class="row mb-3 align-items-center justify-content-between">
                  <div class="col-md-8">
                     <h5>Find The Wave Book</h5>
                     <p class="mb-0">General Book</p>
                  </div>
                  <div class="col-md-4 text-right">
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-primary mr-3"><b>+$92</b></span>
                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                           <div class="iq-progress-bar iq-bg-primary">
                              <span class="bg-primary" data-percent="92"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="row align-items-center justify-content-between">
                  <div class="col-md-8">
                     <h5>A man with those Faces</h5>
                     <p class="mb-0">Biography Book</p>
                  </div>
                  <div class="col-md-4 text-right">
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-danger mr-3"><b>+$85</b></span>
                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                           <div class="iq-progress-bar iq-bg-primary">
                              <span class="bg-danger" data-percent="85"></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
<!-- Wrapper END -->

<!-- Footer -->
<footer class="iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
            </ul>
         </div>
         <div class="col-lg-6 text-right">
            Copyright 2020 <a href="#">Streamit </a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="../assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="../assets/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="../assets/js/wow.min.js"></script>
<!-- Slick JavaScript -->
<script src="../assets/js/slick.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="../assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="../assets/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="../assets/js/smooth-scrollbar.js"></script>
<!-- Chart Custom JavaScript -->
<script src="../assets/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="../assets/js/custom.js"></script>

</body>
</html>
