<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/admin/dashboard')}}">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Creation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/category/create')}}">Add category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/product/create')}}">Add products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/admin/slider/create')}}">Add slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Wizard</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="ti-layout menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/admin/categories')}}">Categories</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/admin/products')}}">Products</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/admin/sliders')}}">Sliders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/admin/orders')}}">Orders</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
