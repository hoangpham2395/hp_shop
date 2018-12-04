<aside class="main-sidebar sidebar-custom">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{getAvatarDefault()}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ getCurrentUser()->email }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li id="dashboard">
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>{{getBreadcrumb('dashboard.name')}}</span>
                </a>
            </li>
            <li class="header">PRODUCTS</li>
            <li id="products" class="treeview">
                <a href="#">
                    <i class="fa fa-mobile"></i> <span>{{getBreadcrumb('products.name')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('products.index')}}"><i class="fa fa-list-ul"></i> {{getBreadcrumb('products.index')}}</a></li>
                    <li><a href="{{route('products.create')}}"><i class="fa fa-plus"></i> {{getBreadcrumb('products.add')}}</a></li>
                    <li><a href="{{route('products.attribute')}}"><i class="fa fa-cog"></i> {{getBreadcrumb('products.attribute')}}</a></li>
                    <li><a href="{{route('product_group.index')}}"><i class="fa fa-cogs"></i> {{getBreadcrumb('products.group')}}</a></li>
                    <li><a href="{{route('products.price')}}"><i class="fa fa-usd"></i> {{getBreadcrumb('products.price')}}</a></li>
                </ul>
            </li>
            <li id="categories" class="treeview">
                <a href="#">
                    <i class="fa fa-barcode"></i> <span>{{getBreadcrumb('categories.name')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> {{getBreadcrumb('categories.index')}}</a></li>
                    <li><a href="{{route('categories.create')}}"><i class="fa fa-plus"></i> {{getBreadcrumb('categories.add')}}</a></li>
                </ul>
            </li>
            <li id="brands" class="treeview">
                <a href="#">
                    <i class="fa fa-apple"></i> <span>{{getBreadcrumb('brands.name')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('brands.index')}}"><i class="fa fa-list-ul"></i> {{getBreadcrumb('brands.index')}}</a></li>
                    <li><a href="{{route('brands.create')}}"><i class="fa fa-plus"></i> {{getBreadcrumb('brands.add')}}</a></li>
                </ul>
            </li>
            <li class="header">ORDERS</li>
            <li id="orders">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>{{getBreadcrumb('orders.index')}}</span>
                </a>
            </li>
            <li class="header">EMPLOYEES</li>
            <li id="employees" class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>{{getBreadcrumb('employees.name')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('employees.index')}}"><i class="fa fa-list-ul"></i> {{getBreadcrumb('employees.index')}}</a></li>
                    <li><a href="{{route('employees.create')}}"><i class="fa fa-plus"></i> {{getBreadcrumb('employees.add')}}</a></li>
                </ul>
            </li>
            <li id="jobs">
                <a href="{{route('jobs.index')}}">
                    <i class="fa fa-suitcase"></i> <span>{{getBreadcrumb('jobs.name')}}</span>
                </a>
            </li>
            <li class="header">ADMIN</li>
            <li id="admin" class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>{{getBreadcrumb('admin.name')}}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-list-ul"></i> {{getBreadcrumb('admin.index')}}</a></li>
                    <li><a href="{{route('admin.create')}}"><i class="fa fa-plus"></i> {{getBreadcrumb('admin.add')}}</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<script type="text/javascript">
    
</script>