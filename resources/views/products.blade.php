<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Management | Mug & Plate Store</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
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
                <h2>Product Management</h2>
                <button class="add-product-btn" id="openModalBtn">+ Add New Product</button>
            </div>

            <div class="card">
                <table class="product-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="productTableBody">
                        <tr>
                            <td><img src="images/mug.jpeg" alt="Mug Example" class="product-thumb"></td>
                            <td>Elegant Mug</td>
                            <td>Mug</td>
                            <td>Rp45.000</td>
                            <td>25</td>
                            <td>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/plate.jpeg" alt="Plate Example" class="product-thumb"></td>
                            <td>Minimalist Plate</td>
                            <td>Plate</td>
                            <td>Rp60.000</td>
                            <td>12</td>
                            <td>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Modal Add/Edit Product -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="closeModalBtn">&times;</span>
            <h3 id="modalTitle">Add Product</h3>
            <form id="productForm">
                <label>Product Name</label>
                <input type="text" id="productName" placeholder="Enter product name" required>

                <label>Product Category</label>
                <select id="productType" required>
                    <option value="">-- Select Category --</option>
                    <option value="Mug">Mug</option>
                    <option value="Plate">Plate</option>
                </select>

                <label>Description</label>
                <textarea id="productDesc" rows="3" placeholder="Short description"></textarea>

                <label>Price</label>
                <input type="number" id="productPrice" placeholder="Enter price" required>

                <label>Stock Quantity</label>
                <input type="number" id="productStock" placeholder="Enter stock quantity" required>

                <label>Upload Image</label>
                <input type="file" id="productImage" accept="image/*">

                <div class="modal-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" id="cancelBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- JS Interaction -->
    <script>
        const modal = document.getElementById("productModal");
        const openModalBtn = document.getElementById("openModalBtn");
        const closeModalBtn = document.getElementById("closeModalBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const form = document.getElementById("productForm");
        const modalTitle = document.getElementById("modalTitle");

        let editRow = null;

        // Open Modal - Add Product
        openModalBtn.onclick = () => {
            modalTitle.textContent = "Add Product";
            form.reset();
            editRow = null;
            modal.style.display = "flex";
        };

        closeModalBtn.onclick = cancelBtn.onclick = () => modal.style.display = "none";

        window.onclick = (e) => {
            if (e.target === modal) modal.style.display = "none";
        };

        // Save Product (Add/Edit)
        form.onsubmit = function(e) {
            e.preventDefault();
            const name = document.getElementById("productName").value;
            const type = document.getElementById("productType").value;
            const price = document.getElementById("productPrice").value;
            const stock = document.getElementById("productStock").value;

            if (editRow) {
                editRow.cells[1].innerText = name;
                editRow.cells[2].innerText = type;
                editRow.cells[3].innerText = "Rp" + parseInt(price).toLocaleString("id-ID");
                editRow.cells[4].innerText = stock;
            } else {
                const tbody = document.getElementById("productTableBody");
                const newRow = tbody.insertRow();
                newRow.innerHTML = `
                    <td><img src="/adminside/image/default.jpg" class="product-thumb"></td>
                    <td>${name}</td>
                    <td>${type}</td>
                    <td>Rp${parseInt(price).toLocaleString("id-ID")}</td>
                    <td>${stock}</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                `;
            }
            modal.style.display = "none";
        };

        // Edit & Delete Functions
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("edit-btn")) {
                const row = e.target.closest("tr");
                editRow = row;
                document.getElementById("productName").value = row.cells[1].innerText;
                document.getElementById("productType").value = row.cells[2].innerText;
                document.getElementById("productPrice").value = row.cells[3].innerText.replace(/[Rp,.]/g, '');
                document.getElementById("productStock").value = row.cells[4].innerText;
                modalTitle.textContent = "Edit Product";
                modal.style.display = "flex";
            }

            if (e.target.classList.contains("delete-btn")) {
                const row = e.target.closest("tr");
                if (confirm("Are you sure you want to delete this product?")) {
                    row.remove();
                }
            }
        });

        // Page Load Animation
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
