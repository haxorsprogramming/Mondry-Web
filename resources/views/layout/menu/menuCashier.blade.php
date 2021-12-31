<div class="deznav" id="divMenu">
    <div class="deznav-scroll">
        <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+ New Laundry</a>
        <ul class="metismenu" id="menu">
            <!-- dashboard  -->
            <li>
                <a href="javascript:void(0)" @click="dashboardAtc()" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- monitor laundry  -->
            <li>
                <a href="#!" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">sticky_note_2</i>
                    <span class="nav-text">Laundry Card</span>
                </a>
            </li>
            <!-- monitor laundry  -->
            <li>
                <a href="#!" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">wysiwyg</i>
                    <span class="nav-text">Laundry Room</span>
                </a>
            </li>
            <!-- data master  -->
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="material-icons">view_timeline</i>
                    <span class="nav-text">Data Master</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void(0)" @click="serviceItemAtc()">Service Item</a></li>
                    <li><a href="javascript:void(0)" @click="rawMaterialAtc()">Raw Material</a></li>
                    <li><a href="javascript:void(0)" @click="customerAtc()">Customer</a></li>
                </ul>
            </li>

            <!-- report  -->
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="material-icons">view_timeline</i>
                    <span class="nav-text">Report</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void(0)">Cash Flow</a></li>
                    <li><a href="javascript:void(0)">Income</a></li>
                    <li><a href="javascript:void(0)">Expenditure</a></li>
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
                <i class="material-icons">logout</i>
                    <span class="nav-text">Logout</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p>Welcome, <br /><b>{{ $userLogin }} ({{ $role }})</b><br/>{{ $branchData -> branch_name }}</p>
            <p><strong>Mondry</strong> Laundry Management App <br />© 2021 All Rights Reserved</p>
            <p>Developer By <span class="heart"></span> NadhaMedia</p>
        </div>
    </div>
</div>