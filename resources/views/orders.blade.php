<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management | Mug & Plate Store</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/orders.css') }}">
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
                <h2>Order Management</h2>
            </div>

            <div class="card">
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001</td>
                            <td>John J</td>
                            <td>Elegant Mug</td>
                            <td>2</td>
                            <td>$8.00</td>
                            <td>2025-10-17</td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <button class="detail-btn" onclick="openModal('detail1')">View</button>
                                <button class="edit-btn" onclick="openModal('status1')">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>Kiara</td>
                            <td>Marble Plate</td>
                            <td>1</td>
                            <td>$6.00</td>
                            <td>2025-10-18</td>
                            <td><span class="status process">Processing</span></td>
                            <td>
                                <button class="detail-btn" onclick="openModal('detail2')">View</button>
                                <button class="edit-btn" onclick="openModal('status2')">Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>Simon</td>
                            <td>Plain Mug</td>
                            <td>3</td>
                            <td>$9.00</td>
                            <td>2025-10-19</td>
                            <td><span class="status shipped">Shipped</span></td>
                            <td>
                                <button class="detail-btn" onclick="openModal('detail3')">View</button>
                                <button class="edit-btn" onclick="openModal('status3')">Edit</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- === MODALS === -->
    <!-- Detail Modals -->
    <div id="detail1" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('detail1')">&times;</span>
            <h3>Order Details #001</h3>
            <p><strong>Customer:</strong> John J</p>
            <p><strong>Product:</strong> Elegant Mug</p>
            <p><strong>Quantity:</strong> 2</p>
            <p><strong>Total:</strong> $8.00</p>
            <p><strong>Status:</strong> Pending</p>
        </div>
    </div>

    <div id="detail2" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('detail2')">&times;</span>
            <h3>Order Details #002</h3>
            <p><strong>Customer:</strong> Kiara</p>
            <p><strong>Product:</strong> Marble Plate</p>
            <p><strong>Quantity:</strong> 1</p>
            <p><strong>Total:</strong> $6.00</p>
            <p><strong>Status:</strong> Processing</p>
        </div>
    </div>

    <div id="detail3" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('detail3')">&times;</span>
            <h3>Order Details #003</h3>
            <p><strong>Customer:</strong> Simon</p>
            <p><strong>Product:</strong> Plain Mug</p>
            <p><strong>Quantity:</strong> 3</p>
            <p><strong>Total:</strong> $9.00</p>
            <p><strong>Status:</strong> Shipped</p>
        </div>
    </div>

    <!-- Edit Status Modals -->
    <div id="status1" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('status1')">&times;</span>
            <h3>Edit Order Status #001</h3>
            <select>
                <option>Pending</option>
                <option>Processing</option>
                <option>Shipped</option>
            </select>
            <div class="modal-actions">
                <button class="save-btn" onclick="saveStatus('status1')">Save</button>
                <button class="cancel-btn" onclick="closeModal('status1')">Cancel</button>
            </div>
        </div>
    </div>

    <div id="status2" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('status2')">&times;</span>
            <h3>Edit Order Status #002</h3>
            <select>
                <option>Pending</option>
                <option selected>Processing</option>
                <option>Shipped</option>
            </select>
            <div class="modal-actions">
                <button class="save-btn" onclick="saveStatus('status2')">Save</button>
                <button class="cancel-btn" onclick="closeModal('status2')">Cancel</button>
            </div>
        </div>
    </div>

    <div id="status3" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal('status3')">&times;</span>
            <h3>Edit Order Status #003</h3>
            <select>
                <option>Pending</option>
                <option>Processing</option>
                <option selected>Shipped</option>
            </select>
            <div class="modal-actions">
                <button class="save-btn" onclick="saveStatus('status3')">Save</button>
                <button class="cancel-btn" onclick="closeModal('status3')">Cancel</button>
            </div>
        </div>
    </div>

    <!-- JS Modal -->
    <script>
        function openModal(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        function saveStatus(id) {
            alert("Order status updated successfully!");
            closeModal(id);
        }

        // Smooth entrance animation
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
