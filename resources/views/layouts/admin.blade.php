<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal | ShopZone</title>
    
    <!-- Fonts: Inter for Professional Look -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    
    <style>
        :root {
            /* Professional Corporate Palette */
            --primary: #0f172a;       /* Slate 900 */
            --primary-light: #334155; /* Slate 700 */
            --accent: #3b82f6;        /* Blue 500 */
            
            --bg-body: #f3f4f6;       /* Gray 100 */
            --bg-card: #ffffff;
            --border-color: #e5e7eb;  /* Gray 200 */
            
            --text-main: #111827;     /* Gray 900 */
            --text-secondary: #6b7280;/* Gray 500 */
            
            --sidebar-width: 260px;
            --header-height: 64px;
            
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --radius: 8px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            margin: 0;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        /* RESET & UTILS */
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; padding: 0; margin: 0; }
        * { box-sizing: border-box; }

        /* SIDEBAR */
        .sidebar {
            width: var(--sidebar-width);
            background-color: var(--primary);
            color: white;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        .sidebar-header {
            height: var(--header-height);
            display: flex;
            align-items: center;
            padding: 0 24px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .brand {
            font-size: 1.125rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-content {
            flex: 1;
            padding: 24px 0;
            overflow-y: auto;
        }

        .nav-group {
            margin-bottom: 24px;
        }

        .nav-label {
            padding: 0 24px;
            font-size: 0.75rem;
            text-transform: uppercase;
            color: rgba(255,255,255,0.4);
            font-weight: 600;
            margin-bottom: 8px;
            letter-spacing: 0.05em;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 10px 24px;
            color: #cbd5e1;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            border-left: 3px solid transparent;
            cursor: pointer;
        }

        .nav-item:hover {
            color: white;
            background: rgba(255,255,255,0.05);
        }

        .nav-item.active {
            color: white;
            background: rgba(255,255,255,0.1);
            border-left-color: var(--accent);
        }

        .nav-item .material-icons-outlined {
            font-size: 20px;
            margin-right: 12px;
            opacity: 0.8;
        }

        .nav-item.active .material-icons-outlined {
            opacity: 1;
            color: var(--accent);
        }

        /* MAIN AREA */
        .main-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* TOP HEADER */
        .topbar {
            height: var(--header-height);
            background-color: var(--bg-card);
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
        }

        .breadcrumbs {
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .icon-btn {
            background: transparent;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .icon-btn:hover {
            background-color: var(--bg-body);
            color: var(--text-main);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-left: 16px;
            border-left: 1px solid var(--border-color);
        }

        .avatar {
            width: 32px;
            height: 32px;
            background-color: var(--accent);
            color: white;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .user-info {
            font-size: 0.875rem;
        }
        .user-name { font-weight: 600; color: var(--text-main); }
        .user-role { font-size: 0.75rem; color: var(--text-secondary); }

        /* CONTENT */
        .content-area {
            flex: 1;
            overflow-y: auto;
            padding: 32px;
        }

        /* Utility Classes for Views */
        .card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            box-shadow: var(--shadow-sm);
            padding: 24px;
        }
        
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
            margin: 0;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.875rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: opacity 0.2s;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="brand">
                <span class="material-icons-outlined" style="color: var(--accent);">grid_view</span>
                SHOPZONE<span style="font-weight:300; opacity:0.7;">ADMIN</span>
            </div>
        </div>

        <div class="sidebar-content">
            <div class="nav-group">
                <div class="nav-label">Overview</div>
                <a href="{{ route('admin.dashboard') }}" class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <span class="material-icons-outlined">dashboard</span>
                    Dashboard
                </a>
                <a href="#" class="nav-item">
                    <span class="material-icons-outlined">analytics</span>
                    Analytics
                </a>
            </div>

            <div class="nav-group">
                <div class="nav-label">Catalog</div>
                <a href="{{ route('admin.products.index') }}" class="nav-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                    <span class="material-icons-outlined">inventory_2</span>
                    Products
                </a>
                <a href="{{ route('admin.categories.index') }}" class="nav-item {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                    <span class="material-icons-outlined">category</span>
                    Categories
                </a>
                <a href="{{ route('admin.variations.index') }}" class="nav-item {{ request()->routeIs('admin.variations.*') ? 'active' : '' }}">
                    <span class="material-icons-outlined">tune</span>
                    Variations
                </a>
            </div>

            <div class="nav-group">
                <div class="nav-label">People</div>
                <a href="{{ route('admin.vendors.index') }}" class="nav-item {{ request()->routeIs('admin.vendors.*') ? 'active' : '' }}">
                    <span class="material-icons-outlined">storefront</span>
                    Vendors
                </a>
                <a href="#" class="nav-item">
                    <span class="material-icons-outlined">people</span>
                    Customers
                </a>
            </div>
            
            <div class="nav-group">
                 <div class="nav-label">System</div>
                 <a href="#" class="nav-item" onclick="document.getElementById('logout-form').submit();">
                    <span class="material-icons-outlined">logout</span>
                    Sign Out
                 </a>
            </div>
        </div>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </aside>

    <div class="main-wrapper">
        <header class="topbar">
            <div class="breadcrumbs">
                ShopZone / Admin / <span style="font-weight:600; color:var(--text-main);">Dashboard</span>
            </div>

            <div class="user-menu">
                <button class="icon-btn">
                    <span class="material-icons-outlined">notifications</span>
                </button>
                <div class="user-profile">
                    <div class="avatar">A</div>
                    <div class="user-info">
                        <div class="user-name">Admin User</div>
                        <div class="user-role">Super Administrator</div>
                    </div>
                </div>
            </div>
        </header>

        <main class="content-area">
            @yield('content')
        </main>
    </div>

</body>
</html>
