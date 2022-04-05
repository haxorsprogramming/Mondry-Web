<div class="deznav" id="divMenu">
    <div class="deznav-scroll">
        <a href="javascript:void(0)" onclick="load_page('app/laundry-card/new','New Laundry Card')" class="add-menu-sidebar">+ New Laundry</a>
        <ul class="metismenu" id="menu">
            <!-- dashboard  -->
            <li>
                <a href="javascript:void(0)" onclick="load_page('app/dashboard', 'Dashboard')" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">dashboard</i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <!-- monitor laundry  -->
            <li>
                <a href="javascript:void(0)" onclick="load_page('app/laundry-card','New Laundry Card')" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">sticky_note_2</i>
                    <span class="nav-text">Laundry Card</span>
                </a>
            </li>
            <!-- monitor laundry  -->
            <li>
                <a href="javascript:void(0)" class="ai-icon" aria-expanded="false">
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
                    <li><a href="javascript:void(0)" onclick="load_page('app/service-item','Service Item')">Service Item</a></li>
                    <li><a href="javascript:void(0)" onclick="load_page('app/raw-material','Raw Material')">Raw Material</a></li>
                    <li><a href="javascript:void(0)" onclick="load_page('app/customer','Customer')">Customer</a></li>
                    <li><a href="javascript:void(0)" onclick="load_page('app/promo-code','Promo Code')">Promo Code</a></li>
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
                <a href="javascript:void(0)" class="ai-icon" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <span class="nav-text">Setting</span>
                </a>
            </li>
            <!-- logout  -->
            <li><a href="javascript:void(0)" class="ai-icon" aria-expanded="false" onclick="logout()">
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