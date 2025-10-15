<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8fafc;
      font-family: "Inter", sans-serif;
      color: #111827;
      margin: 0;
      padding: 0;
    }

    /* Sidebar */
    .sidebar {
      background-color: #111827;
      color: #f9fafb;
      min-height: 100vh;
      width: 220px;
      padding: 1.8rem 1.2rem;
      box-shadow: 4px 0 10px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .sidebar h5 {
      font-weight: 600;
      color: #60a5fa;
      letter-spacing: 0.5px;
    }

    .sidebar a {
      color: #e5e7eb;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 12px;
      margin: 6px 0;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-size: 0.95rem;
    }

    .sidebar a:hover,
    .sidebar a.fw-bold {
      background-color: #1e293b;
      color: #60a5fa;
    }

    /* Main content */
    .main-content {
      margin-left: 240px;
      padding: 2rem 2.5rem;
      transition: all 0.3s ease;
    }

    h3 {
      color: #1e293b;
      font-weight: 700;
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .form-select {
      border-radius: 10px;
      border-color: #e5e7eb;
      padding: 8px 40px 10px 11px;
      width: 220px; 
    }

    .btn-outline-secondary {
      border-radius: 10px;
      border-color: #cbd5e1;
      color: #334155;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
      background-color: #3b82f6;
      border-color: #3b82f6;
      color: #fff;
      box-shadow: 0 4px 10px rgba(59,130,246,0.3);
    }

    .table {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.05);
    }

    .table th {
      background-color: #f1f5f9;
      color: #1e3a8a;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.5px;
    }

    .table td {
      vertical-align: middle;
      color: #334155;
    }

    .status-active {
      background-color: #dcfce7;
      color: #166534;
      border-radius: 6px;
      padding: 4px 10px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .status-draft {
      background-color: #dbeafe;
      color: #1e40af;
      border-radius: 6px;
      padding: 4px 10px;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .product-img {
      width: 55px;
      height: 55px;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .product-img:hover {
      transform: scale(1.05);
    }

    .product-cell {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    /* Variant table styling */
    .variant-row table {
      font-size: 0.9rem;
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 3px 6px rgba(0,0,0,0.05);
      width: 95%; /* reduced width */
      margin-left: auto;
      margin-right: auto;
    }

    .variant-row table th {
      background-color: #f8fafc;
      color: #1e3a8a;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.75rem;
      letter-spacing: 0.4px;
      padding: 6px 8px;
    }

    .variant-row table td {
      padding: 6px 8px;
      vertical-align: middle;
    }

    .variant-color {
      display: inline-block;
      width: 18px;
      height: 18px;
      border-radius: 50%;
      border: 1px solid #cbd5e1;
      margin-right: 6px;
      vertical-align: middle;
    }

    /* --- Mobile adjustments --- */
    @media (max-width: 992px) {
      .variant-row table {
        width: 100%; 
        font-size: 0.85rem;
      }

      .variant-row table th,
      .variant-row table td {
        padding: 5px 6px;
      }

      .variant-color {
        width: 16px;
        height: 16px;
        margin-right: 4px;
      }

      .main-content .d-flex.justify-content-between {
        flex-direction: column;
        align-items: stretch !important;
      }

      .main-content .d-flex.justify-content-between > div {
        width: 100%;
      }

      .main-content .btn-outline-secondary {
        width: 80%;
      }

      /* Sidebar adjustments */
      .hamburger-btn {
        display: block;
        background: none;
        border: none;
        font-size: 1.6rem;
        color: #1e3a8a;
        margin-bottom: 15px;
      }

      .sidebar {
        position: fixed;
        left: -240px;
        top: 0;
        width: 220px;
        height: 100%;
        padding: 1.5rem 1rem;
        transition: all 0.3s ease-in-out;
        z-index: 1050;
      }

      .sidebar.active {
        left: 0;
      }

      .main-content {
        margin-left: 0 !important;
        padding: 1rem;
      }

      h3 {
        font-size: 1.5rem;
      }

      .form-select {
        width: 100%;
      }

      .table th, .table td {
        white-space: normal; /*  show all columns in mobile */
      }

      .product-img {
        width: 45px;
        height: 45px;
      }

      .product-cell {
        gap: 8px;
      }
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar position-fixed" id="sidebar">
    <h5 class="mb-4">ENCORE Custom</h5>
    <a href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="#"><i class="bi bi-receipt"></i> Orders</a>
    <a href="#" class="fw-bold"><i class="bi bi-box-seam"></i> Inventory</a>
    <a href="#"><i class="bi bi-credit-card"></i> Payments</a>
    <a href="#"><i class="bi bi-person"></i> Customers</a>
    <a href="#"><i class="bi bi-graph-up"></i> Reports</a>
    <a href="#"><i class="bi bi-gear"></i> Settings</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <button class="hamburger-btn d-lg-none" id="menuToggle">
      <i class="bi bi-list"></i>
    </button>

    <h3 class="text-center">Inventory</h3>

    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
      <div class="d-flex gap-3 flex-wrap">
        <select class="form-select">
          <option>Number of Product | All</option>
        </select>
        <select class="form-select">
          <option>Total Products | All</option>
        </select>
      </div>

      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary">Export</button>
        <button class="btn btn-outline-secondary">Import</button>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th><input type="checkbox"></th>
            <th>Product</th>
            <th>Status</th>
            <th>Inventory</th>
            <th>Sales Channels</th>
            <th>Markets</th>
            <th>Category</th>
            <th>Vendor</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td><input type="checkbox"></td>
            <td>
              <div class="product-cell d-flex align-items-center gap-3">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-img">
                <div>
                  <span class="fw-semibold">{{ $product['name'] }}</span><br>
                  <small class="text-muted">{{ $product['description'] }}</small>
                </div>
              </div>
            </td>
            <td>
              @if($product['status'] === 'Active')
                <span class="status-active">Active</span>
              @else
                <span class="status-draft">Draft</span>
              @endif
            </td>
               <td>
      <span>{{ $product['inventory'] }}</span><br>
      <small class="text-muted">{{ $product['description1'] }}</small>
    </td>
            
            <td>{{ $product['sales_channels'] }}</td>
            <td>{{ $product['markets'] }}</td>
            <td>{{ $product['category'] }}</td>
            <td>{{ $product['vendor'] }}</td>
            <td><button class="btn btn-link toggle-details p-0"><i class="bi bi-eye"></i></button></td>
          </tr>

          @if(!empty($product['variants']))
          <tr class="variant-row d-none">
            <td colspan="9">
              <table class="table mb-0">
                <thead>
                  <tr class="table-light">
                    <th>Variant</th>
                    <th>Size</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Discount</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($product['variants'] as $variant)
                  <tr>
                    <td>
                      <span class="variant-color" style="background-color: {{ $variant['hex'] }};"></span>
                      {{ $variant['color'] }}
                    </td>
                    <td>-</td>
                    <td>{{ $variant['stock'] }} In Stock</td>
                    <td>${{ number_format($variant['price'], 2) }}</td>
                    <td>{{ $variant['discount'] }}%</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  // Toggle product variant details
  document.querySelectorAll('.toggle-details').forEach(button => {
    button.addEventListener('click', () => {
      const row = button.closest('tr');
      const next = row.nextElementSibling;
      if (next && next.classList.contains('variant-row')) {
        next.classList.toggle('d-none');
      }
    });
  });

  // Mobile sidebar toggle
  const menuToggle = document.getElementById('menuToggle');
  const sidebar = document.getElementById('sidebar');

  menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
  });

  // Close sidebar if clicking outside (on overlay)
  document.addEventListener('click', (e) => {
    if (window.innerWidth <= 992) {
      if (!sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
        sidebar.classList.remove('active');
      }
    }
  });
</script>

</body>
</html>
