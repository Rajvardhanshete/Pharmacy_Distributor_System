<!DOCTYPE html>
<html lang="en" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Oct 2022 05:16:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Raj Farma</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/style.css" rel="stylesheet" />

    <link href="<?=base_url();?>Assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/dropzone.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>Assets/css/plugins/datatables.min.css" />


    
    <link rel="icon" href="<?=base_url() ?>Assets/images/newplus.png" sizes="40x40" type="image/png">
    <!-- <link rel="icon" href="<?=base_url() ?>Assets/images/student-logo.png" sizes="32x32" type="image/png"> -->
   
    <!-- ******* Added New Links***** -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>web_resources/dist/css/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
   <script> var base_path="<?php echo base_url();?>"; </script>
     <style>
        .logo img{
            height:30px;
            width:20p
        }
        .user--info {
    display: flex;
    align-items: center;
    gap: 1;
}
.search--box {
    background: rgb(237, 237, 237);
    border-radius: 15px;
    color: rgb(64, 93, 0);
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 3px 12px;
    margin-right:8px;
}
.search--box input {
    background: transparent;
    padding: 5px;
    border:transparent

}
.search--box i {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5 ease-out;
}
.search--box image{
    height:10px;
}
.search--box i:hover{
    transform: scale(1.2);

}
/* .search{
    background: transparent;
    border:1px solid transparent;
} */
 .icond{
    color: #1F3F49;
 }

    
     </style>


</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                
                <img src="<?=base_url();?>Assets/images/healthcare1.png" alt="" style="height:80px;margin-right:26px;color:white;">
            </div>
            <div class="menu-toggle ">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <!-- <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a> -->
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="#"><i class="i-Drop"></i> Apps</a>
                                    <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="<?=base_url();?>accordion.html">Accordion</a></li>
                                    <li><a href="<?=base_url();?>alerts.html">Alerts</a></li>
                                    <li><a href="<?=base_url();?>buttons.html">Buttons</a></li>
                                    <li><a href="<?=base_url();?>badges.html">Badges</a></li>
                                    <li><a href="<?=base_url();?>carousel.html">Carousels</a></li>
                                    <li><a href="<?=base_url();?>lists.html">Lists</a></li>
                                    <li><a href="<?=base_url();?>popover.html">Popover</a></li>
                                    <li><a href="<?=base_url();?>tables.html">Tables</a></li>
                                    <li><a href="<?=base_url();?>datatables.html">Datatables</a></li>
                                    <li><a href="<?=base_url();?>modals.html">Modals</a></li>
                                    <li><a href="<?=base_url();?>nouislider.html">Sliders</a></li>
                                    <li><a href="<?=base_url();?>tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <!-- <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div> -->
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
             
                <!-- Notificaiton -->
                <div class="dropdown">
                    <!-- <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div> -->
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                      
                    
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <!-- <div class="user col align-self-end"> -->
                <div class="user--info">
                   <!-- <div class="search--box">                
                      <i class="fa-solid fa-search fa-xl"></i>
                        <input class="search" type="text" placeholder="Search"/>
                   </div> -->
                   <a href="?=base_url();?>Adminlogin/logout">
                    <img src="<?=base_url();?>Assets/images/pngwing.com.png" alt="Profile Picture"style="height:45px; margin-right:15px;">
         </a>
                </div>
              
               
                <!-- </div> -->
                       
                        <div class="user--info">
              
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <!-- <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div> -->
                            <!-- <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a> -->
                            <a class="dropdown-item" href="<?=base_url();?>Adminlogin/logout">Log out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- -----------------------------Sidebar Menu----------------------------------------------------- -->

        
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <!-- <li class="nav-item" ><a class="nav-item-hold" href="<?=base_url() ?>Dashboard"><img src="https://img.icons8.com/stickers/2x/spotify.png" style="width:30px"><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li class="nav-item "style="padding-top:10px;">
                        <a class="nav-item-hold" href="http://localhost/ProjectTemplate1/dash/create">
                        <i class="fa-solid fa-house fa-2xl icond"></i>
                        <span class="nav-text">Dashboard</span></a>
                        <!-- Songs <br>Management -->
                    </li>
                    <li class="nav-item"style="padding-top:10px;" data-item="extrakits">
                        <a class="nav-item-hold" href="<?=base_url() ?>Employee">
                        <i class="fa-solid fa-door-open fa-2xl icond"></i>
                        <!-- <i class="fa-solid fa-torii-gate fa-2xl icond"></i>  -->
                        <span class="nav-text">Front Office</span>
                        <!-- <div class="triangle"></div> -->
                    </li>

                    <li class="nav-item"style="margin-top:-10px;" data-item="extrakits2"><a class="nav-item-hold" href="<?=base_url() ?>Employee">
                    <i class="fa-solid fa-people-roof fa-2xl icond"></i>
                    <span class="nav-text">HR</span>
                        <!-- <div class="triangle"></div> -->
                    </li>

                    <li class="nav-item"style="margin-top:-10px;" data-item="extrakits1"><a class="nav-item-hold" href="<?=base_url() ?>Enquiry">
                    <i class="fa-solid fa-boxes-stacked fa-2xl icond"></i>
                    <span class="nav-text">Inventory</span>
                        <!-- <div class="triangle"></div> -->
                    </li>
                   

                  
                  
                    <li class="nav-item"  data-item="extrakits3"><a class="nav-item-hold" style="margin-top:-20px;"href="<?=base_url() ?>Employee">
                        <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                        <i class="fa-solid fa-warehouse fa-2xl icond"></i>
                      <span class="nav-text">Wearhouse</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    <li class="nav-item" data-item="extrakits4"><a class="nav-item-hold" href="<?=base_url() ?>">
                        
                        <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                        <i class="fa-solid fa-bag-shopping fa-2xl icond"></i>
                       
                      
                      <span class="nav-text">Purchase</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                
                    <li class="nav-item" style="margin-top:-3px;" data-item="extrakits7"><a class="nav-item-hold" href="<?=base_url() ?>">
                        <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                        <i class="fa-solid fa-cart-shopping fa-2xl icond"></i>
                      <span class="nav-text">Sales</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    <li class="nav-item" style="margin-top:-3px;" data-item="extrakits8"><a class="nav-item-hold" href="<?=base_url() ?>">
                        <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                        <i class="fa-solid fa-gear fa-2xl icond"></i>
                      <span class="nav-text">Setting</span></a>
                        <!-- <div class="triangle"></div> -->
                    </li>
                    <!-- <li class="nav-item" style="margin-top:-3px;" data-item="extrakits9"><a class="nav-item-hold" href="<?=base_url() ?>">
                        <a class="nav-item-hold" href="<?=base_url() ?>UserDetails">
                        <i class="fa-solid fa-file fa-2xl icond"></i>
                      <span class="nav-text">Complain</span></a>
                        <div class="triangle"></div>
                    </li> -->
                    
                   
                    <li class="nav-item"><a class="nav-item-hold" href="<?=base_url();?>Adminlogin/logout"><i class=" nav-icon fas fa-sign-out-alt icond"></i>Logout</a>
                    </li>
              
                   
                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
              
                <ul class="childNav" data-parent="forms">
                    <li class="nav-item"><a href="<?=base_url();?>Role"><i class=" nav-icon far fa-user-circle"></i><span class="item-name">Role</span></a></li>



                </ul>
               
               
                <!-- chartjs-->
                <ul class="childNav" data-parent="charts">
                    <!-- <li class="nav-item"><a href="<?=base_url();?>SelectStudent"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Selected List</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>SelectStudent/branch"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Branch Wise List</span></a></li>
                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/department"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Department Wise List</span></a></li>

                    <li class="nav-item dropdown-sidemenu"><a href="<?=base_url();?>SelectStudent/company"><i class=" nav-icon nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Company Wise List</span></a></li> -->
                </ul>


                <!-- ------------------------------------Front Office Model----------------------------------------------- -->


                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item">
                        <a href="#subMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-torii-gate  icond"></i>&nbsp;
                            <span class="item-name">Gate Pass</span></a>
                        <ul class="collapse list-unstyled" id="subMenu" style="background-color:#1F3F49;">
                            <li>
                                                        
                            <a style="color:white;" href="<?=base_url();?>frontoffice/pass/create"> Create New</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Pass"> Details View</a>
                            </li>

                          
                        </ul>
                    </li>
                  

                    <li class="nav-item">
                        <a href="#subMenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-clipboard-question  icond" ></i>&nbsp;
                            <span class="item-name">Enquiry</span></a>
                        <ul class="collapse list-unstyled" id="subMenu2" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Enquiry/create"> New Enquiry</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Enquiry/index">Enquiry Details</a>
                            </li>

                          
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-book  icond"></i>&nbsp;
                            <span class="item-name">Visitor Book</span></a>
                        <ul class="collapse list-unstyled" id="subMenu3" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/visitor/create">New Visitor</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/visitor">Visitor Details</a>
                            </li>

                          
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-phone  icond" ></i>&nbsp;
                            <span class="item-name">Call Log</span></a>
                        <ul class="collapse list-unstyled" id="subMenu4" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Calllogs/create">New Calllog</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Calllogs">Calllog Details</a>
                            </li>

                          
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-truck-ramp-box  icond" ></i>&nbsp;
                            <span class="item-name">Postal Receive</span></a>
                        <ul class="collapse list-unstyled" id="subMenu5" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postalrecieve/create">Postal-Recieve</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postalrecieve">Recieve Details</a>
                            </li>

                          
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#subMenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-envelope-circle-check icond" ></i>&nbsp;
                            <span class="item-name">Postal dispatch</span></a>
                        <ul class="collapse list-unstyled" id="subMenu6" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postaldispatch/create">Postal-Dispatch</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postaldispatch">Dispatch Details</a>
                            </li>

                          
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-message  icond" ></i>&nbsp;
                            <span class="item-name">Staff Message</span></a>
                        <ul class="collapse list-unstyled" id="subMenu7" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postaldispatch/create">Staff-Message</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/Postaldispatch">Massege Details</a>
                            </li>

                          
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size: 1rem;">
                        <i class="fa-solid fa-file  icond"></i>&nbsp;
                            <span class="item-name">Complain</span></a>
                        <ul class="collapse list-unstyled" id="subMenu8" style="background-color:#1F3F49;">
                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/complain/create">New Complain</a>
                            </li>

                            <li>
                            <a style="color:white;"href="<?=base_url();?>frontoffice/complain">Complain Details</a>
                            </li>

                          
                        </ul>
                    </li>


                </ul>

          <!-- -----------------------------------------Inventory Module-----------------------------      -->

                <ul class="childNav" data-parent="extrakits1">
                    <li class="nav-item">
                        <a href="#subMenu01" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-sitemap icond"></i>  &nbsp;
                            <span class="item-name">Item Information</span></a>
                            <ul class="collapse list-unstyled" id="subMenu01" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>inventory/itemInformation/create" style="color:white;">Creat Item</a>
                                </li>
                                <li ><a href="#" style="color:white;">Update</a></li>                               
                          
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu02" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-table-list icond"></i> &nbsp;
                            <span class="item-name">Item Category</span></a>
                            <ul class="collapse list-unstyled" id="subMenu02" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>inventory/itemCategoryInformation/create"style="color:white;">Create Category</a>
                                </li>
                                <li ><a style="color:white;" href="#">Update</a></li>
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu03" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-brands fa-squarespace icond"></i>  &nbsp;
                            <span class="item-name">HNS Information</span></a>
                            <ul class="collapse list-unstyled" id="subMenu03" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>inventory/hsnInformation/create" style="color:white;">Create</a>
                                </li>
                                <li ><a href="#" style="color:white;">item1</a></li>
                                
                          
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu04" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-money-check-dollar icond"></i> &nbsp;
                            <span class="item-name">GST Information</span></a>
                            <ul class="collapse list-unstyled" id="subMenu04" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>inventory/gstInformation/create" style="color:white;">Create</a>
                                </li>
                                <li ><a href="#" style="color:white;">update</a></li>
                           </ul>
                          </li>
                     </ul>

                <!-- ----------------------------------------------Hr Model--------------------------------------- -->

                <ul class="childNav" data-parent="extrakits2">
                <!-- <li class="nav-item">
                        <a href="#subMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-circle-info icond"></i> &nbsp;
                            <span class="item-name">Branch Details</span></a>
                            <ul class="collapse list-unstyled" id="subMenu" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>hr/branchDetails/create" style="color:white;">Create</a>
                                </li>
                               
                                <li ><a href="#" style="color:white;">Update</a></li>
                              
                          
                            </ul>
                    </li> -->

                    <li class="nav-item">
                        <a href="#subMenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-code-branch icond"></i>  &nbsp;
                            <span class="item-name">Branch Info</span></a>
                            <ul class="collapse list-unstyled" id="subMenu1" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>hr/branchInformation/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                               
                          
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-brands fa-bandcamp icond"></i> &nbsp;
                            <span class="item-name">Brand Info</span></a>
                            <ul class="collapse list-unstyled" id="subMenu2" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>hr/brandInformation/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                               
                          
                            </ul>
                    </li>
                    

                    <li class="nav-item">
                        <a href="#subMenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-puzzle-piece icond"></i>  &nbsp;
                            <span class="item-name">Department Info</span></a>
                            <ul class="collapse list-unstyled" id="subMenu3" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>HR/Department/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                               
                          
                            </ul>
                    </li>

              

                    <li class="nav-item">
                        <a href="#subMenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-address-card icond"></i></i>  &nbsp;
                            <span class="item-name">User Info</span></a>
                            <ul class="collapse list-unstyled" id="subMenu4" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>hr/usercreate/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                               
                          
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-regular fa-address-book icond"></i>  &nbsp;
                            <span class="item-name">Employee Info</span></a>
                            <ul class="collapse list-unstyled" id="subMenu5" style="background-color:#1F3F49;">
                                <li >
                                    <a href="<?=base_url();?>hr/empinfo/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                            </ul>
                       </li>

                       <li class="nav-item">
                        <a href="#subMenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-regular fa-address-book icond"></i>  &nbsp;
                            <span class="item-name">Attendance</span></a>
                            <ul class="collapse list-unstyled" id="subMenu6" style="background-color:#1F3F49;">
                                <li >
                                    <a href="#" style="color:white;">Musterroll Entry</a>
                                </li>
                                <li ><a style="color:white;">Biometric Entry</a></li>
                            </ul>
                       </li>

                       <li class="nav-item">
                        <a href="#subMenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-regular fa-address-book icond"></i>  &nbsp;
                            <span class="item-name">Leave Management</span></a>
                            <ul class="collapse list-unstyled" id="subMenu7" style="background-color:#1F3F49;">
                                <li >
                                    <a href="#" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Modify</a></li>
                                <li ><a style="color:white;">Approve</a></li>
                            </ul>
                       </li>

                       <li class="nav-item">
                        <a href="#subMenu8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-regular fa-address-book icond"></i>  &nbsp;
                            <span class="item-name">Party</span></a>
                            <ul class="collapse list-unstyled" id="subMenu8" style="background-color:#1F3F49;">
                                <li >
                                    <a  href="<?=base_url();?>HR/party/create" style="color:white;">Create</a>
                                </li>
                                <li ><a style="color:white;">Update</a></li>
                                
                            </ul>
                       </li>
                  </ul>

                <!-- ----------------------------------------Wearhouse Model-------------------------------------- -->

                <ul class="childNav" data-parent="extrakits3">
                    <li class="nav-item">
                        <a href="#subMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-bars-progress icond"></i>&nbsp;
                        <span class="item-name">Management</span></a>
                        <ul class="collapse list-unstyled" id="subMenu" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-wrench icond"></i>&nbsp;
                        <span class="item-name">Equipment</span></a>
                        <ul class="collapse list-unstyled" id="subMenu1" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a href="#subMenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-brands fa-slack icond"></i>&nbsp;
                        <span class="item-name">Batch</span></a>
                        <ul class="collapse list-unstyled" id="subMenu2" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-item">
                        <a href="#subMenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-box-archive icond"></i>&nbsp;
                        <span class="item-name">Stock Data</span></a>
                        <ul class="collapse list-unstyled" id="subMenu4" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-flag icond"></i>&nbsp;
                        <span class="item-name">Report</span></a>
                        <ul class="collapse list-unstyled" id="subMenu5" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
               </ul>

       <!-- ----------------------------------------Purchase Model-------------------------------------- -->
               
              <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-bell icond"></i> &nbsp;
                        <span class="item-name">Requisition</span></a>
                        <ul class="collapse list-unstyled" id="subMenu" style="background-color:#1F3F49;">
                            <li>
                                <a href="<?=base_url();?>Purches/PurchaseRequisition/create" style="color:white;">Send</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Recieve</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu1"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-regular fa-map icond"></i>&nbsp;
                        <span class="item-name">Party Qutation</span></a>
                        <ul class="collapse list-unstyled" id="subMenu1" style="background-color:#1F3F49;">
                            <li>
                                <a href="<?=base_url();?>Purches/quotation/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu2"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-cart-shopping icond"></i> &nbsp;
                        <span class="item-name">Order</span></a>
                        <ul class="collapse list-unstyled" id="subMenu2" style="background-color:#1F3F49;">
                            <li>
                                <a href="<?=base_url();?>Purches/PurchaseOrder/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu3"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-inbox icond"></i> &nbsp;
                        <span class="item-name">Inward</span></a>
                        <ul class="collapse list-unstyled" id="subMenu3" style="background-color:#1F3F49;">
                            <li>
                                <a href="<?=base_url();?>Purches/Inward/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu4"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-credit-card icond"></i>&nbsp;
                        <span class="item-name">Transaction</span></a>
                        <ul class="collapse list-unstyled" id="subMenu4" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu5"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-receipt icond"></i>&nbsp;
                        <span class="item-name">Chalan</span></a>
                        <ul class="collapse list-unstyled" id="subMenu5" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu6"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-right-left icond"></i> &nbsp;
                        <span class="item-name">Return</span></a>
                        <ul class="collapse list-unstyled" id="subMenu6" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu7"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-flag icond"></i> &nbsp;
                        <span class="item-name">Report</span></a>
                        <ul class="collapse list-unstyled" id="subMenu7" style="background-color:#1F3F49;">
                            <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- <ul class="childNav" data-parent="extrakits4">
                    <li class="nav-item">
                        <a href="#subMenu7"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-flag icond"></i> &nbsp;
                        <span class="item-name">User</span></a>
                        <ul class="collapse list-unstyled" id="subMenu7" style="background-color:#1F3F49;">
                            <li>
                                <a href="<?=base_url();?>Purches/UserCreate/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul> -->

    <!-- ---------------------------- Sales Module---------------------------------------- -->
                
                <ul class="childNav" data-parent="extrakits7">
                    <li class="nav-item">
                        <a href="#subMenu"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-flag icond"></i>&nbsp;
                        <span class="item-name">Sales Qutation</span></a>
                        <ul class="collapse list-unstyled" id="subMenu" style="background-color:#1F3F49;">
                           <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu1"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-file-invoice icond"></i>&nbsp;
                        <span class="item-name">Invoice</span></a>
                        <ul class="collapse list-unstyled" id="subMenu1" style="background-color:#1F3F49;">
                           <li>
                                <a href="<?=base_url();?>Salse/Invoice/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu2"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-receipt icond"></i>&nbsp;
                        <span class="item-name">Delevary Chalan</span></a>
                        <ul class="collapse list-unstyled" id="subMenu2" style="background-color:#1F3F49;">
                           <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu3"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-credit-card icond"></i>&nbsp;
                        <span class="item-name">Branch Transaction</span></a>
                        <ul class="collapse list-unstyled" id="subMenu3" style="background-color:#1F3F49;">
                           <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu4"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-right-left icond"></i>&nbsp;
                        <span class="item-name">Sales Return</span></a>
                        <ul class="collapse list-unstyled" id="subMenu4" style="background-color:#1F3F49;">
                           <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu5"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-flag icond"></i>&nbsp;
                        <span class="item-name">Report</span></a>
                        <ul class="collapse list-unstyled" id="subMenu5" style="background-color:#1F3F49;">
                           <li>
                                <a href="#" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu6"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-file-invoice icond"></i>&nbsp;
                        <span class="item-name">Branch</span></a>
                        <ul class="collapse list-unstyled" id="subMenu6" style="background-color:#1F3F49;">
                           <li>
                                <a href="<?=base_url();?>Salse/Branch/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#subMenu7"  data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="font-size:1rem;">
                        <i class="fa-solid fa-file-invoice icond"></i>&nbsp;
                        <span class="item-name">Bank</span></a>
                        <ul class="collapse list-unstyled" id="subMenu7" style="background-color:#1F3F49;">
                           <li>
                                <a href="<?=base_url();?>Salse/Bank/create" style="color:white;">Create</a>
                            </li>

                            <li>
                                <a href="#" style="color:white;">Update</a>
                            </li>
                        </ul>
                    </li>
                </ul>
              
                <!-- <ul class="childNav" data-parent="extrakits5">
                    <li class="nav-item"><a href="<?=base_url();?>Invoice/create"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/external-teacher-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"  style="width:30px" >&emsp;<span class="item-name">Add Invoice</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Invoice"><img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/external-teacher-elearning-itim2101-fill-itim2101-1.png" style="width:30px" >&emsp;<span class="item-name">Invoice Details</span></a></li>                 
                </ul> -->
                <!-- <ul class="childNav" data-parent="extrakits6">
                    <li class="nav-item"><a href="<?=base_url();?>Patient/create"><img src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/external-teacher-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev.png"  style="width:30px" >&emsp;<span class="item-name">Add Patient</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Patient"><img src="https://img.icons8.com/external-itim2101-fill-itim2101/64/external-teacher-elearning-itim2101-fill-itim2101-1.png" style="width:30px" >&emsp;<span class="item-name">Patient Details</span></a></li>                 
                </ul> -->
                

                <ul class="childNav" data-parent="extrakits8">
                    <li class="nav-item"><a href="<?=base_url();?>Staff/create">&emsp;<span class="item-name">Staff-Message</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>Staff">&emsp;<span class="item-name">Massege Details</span></a></li>                 
                </ul>
                <ul class="childNav" data-parent="extrakits9">
                    <li class="nav-item"><a href="<?=base_url();?>complain/create">&emsp;<span class="item-name">New Complain</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>complain">&emsp;<span class="item-name">Complain Details</span></a></li>                 
                </ul>
                

                
                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signin.html"><i class=" nav-icon nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i class=" nav-icon nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i class=" nav-icon nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/not-found.html"><i class=" nav-icon nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                    <li class="nav-item"><a href="<?=base_url();?>user.profile.html"><i class=" nav-icon nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                    <li class="nav-item"><a class="open" href="<?=base_url();?>blank.html"><i class=" nav-icon nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>