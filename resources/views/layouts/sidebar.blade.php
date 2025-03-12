<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('user-profile.png') }}" class="img-circle" alt="User  Image">
            </div>
            <div class="pull-left info">
                <p>{{ \Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i> <span>Category</span></a></li>
            <li><a href="{{ route('products.index') }}"><i class="fa fa-cubes"></i> <span>Product</span></a></li>
            <li><a href="{{ route('customers.index') }}"><i class="fa fa-users"></i> <span>Customer</span></a></li>
            <li><a href="{{ route('suppliers.index') }}"><i class="fa fa-truck"></i> <span>Supplier</span></a></li>
            <li><a href="{{ route('productsOut.index') }}"><i class="fa fa-minus"></i> <span>Outgoing Products</span></a></li>
            <li><a href="{{ route('productsIn.index') }}"><i class="fa fa-cart-plus"></i> <span>Purchase Products</span></a></li>
            <li><a href="{{ route('user.index') }}"><i class="fa fa-user-secret"></i> <span>System Users</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<style>
    .main-sidebar {
        background-color: #343a40; /* Warna latar belakang sidebar */
    }

    .sidebar .user-panel {
        background-color: #495057; /* Warna latar belakang panel pengguna */
        padding: 10px;
        border-radius: 5px;
    }

    .user-panel .info p {
        color: #ffffff; /* Warna teks nama pengguna */
        font-weight: bold;
    }

    .sidebar-menu > li > a {
        color: #cfd8dc; /* Warna teks item menu */
        padding: 15px 20px;
        border-radius: 5px;
        transition: background 0.3s, color 0.3s;
    }

    .sidebar-menu > li > a:hover {
        background-color: #007bff; /* Warna latar belakang saat hover */
        color: #ffffff; /* Warna teks saat hover */
    }

    .sidebar-menu .header {
        color: #ffffff; /* Warna teks header */
        font-size: 1.2rem;
        padding: 10px 20px;
        text-transform: uppercase;
    }

    .sidebar-menu .fa {
        margin-right: 10px; /* Jarak antara ikon dan teks */
    }
</style>
</aside>
