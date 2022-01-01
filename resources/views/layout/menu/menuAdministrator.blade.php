<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav" id="divMenu">
    <div class="deznav-scroll">
        <!-- <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+ New Laundry</a> -->
        <ul class="metismenu" id="menu">
            <!-- dashboard  -->
            <li>
                <a href="javascript:void(0)" @click="dashboardAtc()" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- laundry room  -->
            <li>
                <a href="#!" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">hub</i>
                    <span class="nav-text">Monitor Branch</span>
                </a>
            </li>
            <!-- data master  -->
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="material-icons">view_timeline</i>
                    <span class="nav-text">Data Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void(0)" @click="branchAtc()">Branch</a></li>
                    <li><a href="javascript:void(0)" @click="employeeAtc()">Employee</a></li>
                    <li><a href="javascript:void(0)" @click="customerAtc()">Customer</a></li>
                </ul>
            </li>
            <!-- setting  -->
            <li>
                <a href="#!" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <span class="nav-text">Setting</span>
                </a>
            </li>
            <!-- logout  -->
            <li><a href="javascript:void(0)" class="ai-icon" aria-expanded="false" @click="logOutAtc()">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p>Welcome, <b>{{ $userLogin }} ({{ $role }})</b></p>
            <p><strong>Mondry</strong> Laundry Management App <br />© 2021 All Rights Reserved</p>
            <p>Developer By <span class="heart"></span> NadhaMedia</p>
        </div>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->