<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">BON AMI BAKERY</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li>
                <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('user.index') }}"><i class="far fa-user"></i><span>Users</span></a>
                {{-- <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>

                </ul> --}}
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('category.index') }}"><i class="fa fa-bars"></i><span>Category</span></a>
                {{-- <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">All Users</a>
                    </li>

                </ul> --}}
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('product.index') }}"><i class="fa fa-archive"></i><span>Products</span></a>
                {{-- <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Products</a>
                    </li>

                </ul> --}}
            </li>

            <li class="nav-item dropdown">
                <a href="{{ route('order.index') }}"><i class="far fa-file-alt"></i><span>Orders</span></a>
                {{-- <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Products</a>
                    </li>

                </ul> --}}
            </li>

    </aside>
</div>
