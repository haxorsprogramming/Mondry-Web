
@include('layout.headerApp')

@if($role == 'Administrator')
    @include('layout.menu.menuAdministrator')
@elseif($role == 'Manager Branch')
    @include('layout.menu.menuManagerBranch')
@elseif($role == 'Cashier')
    @include('layout.menu.menuCashier')
@endif
<div class="content-body">
    <!-- row -->
    <div class="container-fluid" id="divUtama">

    </div>
</div>

@include('layout.footerApp')