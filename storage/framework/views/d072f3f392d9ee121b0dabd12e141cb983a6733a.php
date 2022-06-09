<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Fitness Services</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!--Orders-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/order" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-shopping-basket"></i>
                <span>Orders</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingorder" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">State of orders:</h6>
                    <a class="collapse-item" >New orders</a>
                    <a class="collapse-item" >Accepted orders</a>
                    <a class="collapse-item" >Ongoing orders</a>
                    <a class="collapse-item" >Completed orders</a>
                </div>
            </div>
        </li>

        <!--Categories-->
        <li class="nav-item">
            <a class="nav-link" href="/admin/category">
                <i class="fas fa-fw fa-satellite text-yellow"></i>
                <span>Categories</span></a>
        </li>

        <!--Products-->
        <li class="nav-item">
            <a class="nav-link" href="/admin/product">
                <i class="fas fa-fw fa-table text-red-500"></i>
                <span>Products</span></a>
        </li>

        <!--Comments-->
        <li class="nav-item">
            <a class="nav-link" href="/admin/comment">
                <i class="fas fa-fw fa-comment"></i>
                <span>Comments</span></a>
        </li>

        <!--FAQ-->
        <li class="nav-item">
            <a class="nav-link" href="/admin/faq">
                <i class="fas fa-fw fa-question-circle"></i>
                <span>FAQs</span></a>
        </li>

        <!--Messages-->
        <li class="nav-item">
            <a class="nav-link" href="/admin/message">
                <i class="fas fa-fw fa-mail-bulk"></i>
                <span>Messages</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            General
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="/admin/setting">
                <i class="fas fa-fw fa-users-cog"></i>
                <span>Settings</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
<?php /**PATH /Users/ademclk/PhpstormProjects/testapp/resources/views/admin/header.blade.php ENDPATH**/ ?>