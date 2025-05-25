<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم - موقع ميدكوم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 5px;
        }
        .sidebar .nav-link:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .sidebar .nav-link.active {
            color: #fff;
            background-color: #0d6efd;
        }
        .sidebar .nav-link i {
            margin-left: 10px;
        }
        .main-content {
            padding: 20px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }
        .card-count {
            font-size: 2rem;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="d-flex flex-column p-3">
                    <h3 class="text-center mb-4">لوحة التحكم</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                                <i class="bi bi-speedometer2"></i>
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.services.index') }}" class="nav-link">
                                <i class="bi bi-gear"></i>
                                الخدمات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.index') }}" class="nav-link">
                                <i class="bi bi-box"></i>
                                المنتجات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.pages.index') }}" class="nav-link">
                                <i class="bi bi-file-earmark-text"></i>
                                الصفحات
                            </a>
                        </li>
                        <li class="nav-item mt-5">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="bi bi-house"></i>
                                العودة للموقع
                            </a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link border-0 bg-transparent">
                                    <i class="bi bi-box-arrow-right"></i>
                                    تسجيل الخروج
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>لوحة التحكم الرئيسية</h2>
                    <div>
                        <span class="me-2">مرحباً، {{ Auth::user()->name }}</span>
                    </div>
                </div>

                <!-- Dashboard Cards -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <div class="card-icon text-primary">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="card-title">الخدمات</div>
                            <div class="card-count">{{ $servicesCount }}</div>
                            <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-primary mt-3">إدارة الخدمات</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <div class="card-icon text-success">
                                <i class="bi bi-box"></i>
                            </div>
                            <div class="card-title">المنتجات</div>
                            <div class="card-count">{{ $productsCount }}</div>
                            <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-outline-success mt-3">إدارة المنتجات</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center p-4">
                            <div class="card-icon text-info">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="card-title">الصفحات</div>
                            <div class="card-count">{{ $pagesCount }}</div>
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline-info mt-3">إدارة الصفحات</a>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card p-4">
                            <h4>إجراءات سريعة</h4>
                            <div class="d-flex flex-wrap gap-2 mt-3">
                                <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-circle me-2"></i>إضافة خدمة جديدة
                                </a>
                                <a href="{{ route('admin.products.create') }}" class="btn btn-success">
                                    <i class="bi bi-plus-circle me-2"></i>إضافة منتج جديد
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
