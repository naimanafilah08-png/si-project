<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | Mug & Plate Store</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/users.css') }}">
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
            <div class="page-header">
                <h2>User Management</h2>
            </div>

            <!-- ===== TABEL USER BIASA ===== -->
            <div class="card">
                <h3 class="table-title">Daftar Pengguna (User Biasa)</h3>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Nama Pengguna</th>
                            <th>Email</th>
                            <th>Tanggal Bergabung</th>
                            <th>Jumlah Pesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Naima Nafilah</td>
                            <td>naima@mail.com</td>
                            <td>2025-09-02</td>
                            <td>5</td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan akun Naima Nafilah?')">Nonaktifkan</button>
                                <button class="delete-btn"
                                    onclick="confirmAction('Hapus akun Naima Nafilah?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rizky Pratama</td>
                            <td>rizkypratama@gmail.com</td>
                            <td>2025-09-05</td>
                            <td>3</td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan akun Rizky Pratama?')">Nonaktifkan</button>
                                <button class="delete-btn"
                                    onclick="confirmAction('Hapus akun Rizky Pratama?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Alya Putri</td>
                            <td>alyaputri@example.com</td>
                            <td>2025-09-10</td>
                            <td>2</td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan akun Alya Putri?')">Nonaktifkan</button>
                                <button class="delete-btn"
                                    onclick="confirmAction('Hapus akun Alya Putri?')">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== TABEL ADMIN ===== -->
            <div class="card admin-card">
                <h3 class="table-title admin-title">Daftar Akun Admin</h3>
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>Kode Admin</th>
                            <th>Status Login</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin A</td>
                            <td>admin@store.com</td>
                            <td>admin2</td>
                            <td><span class="status active">Sedang Aktif</span></td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan Admin A?')">Nonaktifkan</button>
                                <button class="delete-btn" onclick="confirmAction('Hapus Admin A?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Admin B</td>
                            <td>adminb@store.com</td>
                            <td>admin1</td>
                            <td><span class="status inactive">Sudah Logout</span></td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan Admin B?')">Nonaktifkan</button>
                                <button class="delete-btn" onclick="confirmAction('Hapus Admin B?')">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Admin C</td>
                            <td>adminc@store.com</td>
                            <td>admin3</td>
                            <td><span class="status inactive">Sudah Logout</span></td>
                            <td>
                                <button class="deactivate-btn"
                                    onclick="confirmAction('Nonaktifkan Admin C?')">Nonaktifkan</button>
                                <button class="delete-btn" onclick="confirmAction('Hapus Admin C?')">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script>
        function confirmAction(message) {
            if (confirm(message)) {
                alert("Aksi berhasil dilakukan!");
            } else {
                alert("Aksi dibatalkan.");
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const card = document.querySelector('.card');
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s, transform 0.5s';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 200);
        });
    </script>
</body>

</html>
