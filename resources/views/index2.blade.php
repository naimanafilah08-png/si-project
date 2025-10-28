<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Mug & Plate Store</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/das.css') }}">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <h1>Mug & Plate Store - Admin Dashboard</h1>
            <div class="user-info">
                <span>Welcome, Admin</span>
                <button class="logout-btn">Logout</button>
            </div>
        </header>

        <!-- Sidebar -->
        <nav class="sidebar">
            <ul class="nav-menu">
                <li><a href="{{ url('/index2') }}">📊 Dashboard</a></li>
                <li><a href="{{ url('/products') }}">🛍️ Products</a></li>
                <li><a href="{{ url('/orders') }}">📦 Orders</a></li>
                <li><a href="{{ url('/users') }}">👥 Users</a></li>

            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Summary Cards -->
            <div class="summary-cards">
                <div class="card">
                    <h3>Total Produk</h3>
                    <p class="number">150</p>
                </div>
                <div class="card">
                    <h3>Total Pesanan</h3>
                    <p class="number">45</p>
                </div>
                <div class="card">
                    <h3>Total Pelanggan</h3>
                    <p class="number">200</p>
                </div>
                <div class="card">
                    <h3>Total Penjualan</h3>
                    <p class="number">$5,000</p>
                </div>
            </div>

            <!-- Chart Placeholder -->
            <div class="chart-section">
                <h3>Grafik Penjualan Bulanan</h3>
                <div class="chart-placeholder">
                    <p>Placeholder untuk grafik</p>
                    <canvas id="salesChart" width="400" height="200"></canvas>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="table-section">
                <h3>Pesanan Terbaru</h3>
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Nama Pembeli</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>2023-10-01</td>
                            <td>$25.00</td>
                            <td>Dikirim</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>2023-10-02</td>
                            <td>$50.00</td>
                            <td>Dalam Proses</td>
                        </tr>
                        <tr>
                            <td>Bob Johnson</td>
                            <td>2023-10-03</td>
                            <td>$30.00</td>
                            <td>Selesai</td>
                        </tr>
                        <tr>
                            <td>Alice Brown</td>
                            <td>2023-10-04</td>
                            <td>$40.00</td>
                            <td>Dikirim</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Penjualan ($)',
                    data: [1200, 1900, 3000, 5000, 2000, 3000],
                    borderColor: '#4CAF50',
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
        });
    </script>
</body>

</html>
