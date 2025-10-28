<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Mug & Plate</title>

  {{-- Panggil CSS dari folder public --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    
  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>


<body>
  <header>
    <div class="logo">Mug & Plate</div>
    <nav>
      <a href="index.html">Home</a>
      <a href="ours.html">Ours</a>
      <a href="blog.html" class="active">Blog</a>
      <a href="#">About Us</a>
    </nav>

    <div class="right-icons">
      <div class="cart">🛒</div>

      <!-- BELUM LOGIN -->
      <details class="user-menu not-logged">
        <summary class="user-icon">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Icon">
        </summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="#" class="btn primary">Sign in</a>
          <div class="btn-row">
            <a href="#" class="btn"><span>👜</span> Orders</a>
            <a href="#" class="btn"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>

      <!-- SUDAH LOGIN -->
      <details class="user-menu logged">
        <summary class="user-initial"></summary>
        <div class="dropdown">
          <h4>Account</h4>
          <a href="#" class="btn primary">Sign out</a>
          <div class="btn-row">
            <a href="#" class="btn"><span>👜</span> Orders</a>
            <a href="#" class="btn"><span>👤</span> Profile</a>
          </div>
        </div>
      </details>
    </div>
  </header>

  <!-- HERO BLOG -->
  <section class="blog-hero">
    <div class="blog-hero-content">
      <h1>Mug & Plate Blog</h1>
      <p>Tips, inspirasi, dan cerita di balik setiap karya kami</p>
    </div>
  </section>

  <!-- BLOG CONTENT -->
  <section class="blog-content">
    <div class="blog-container">
      <!-- Featured Post -->
      <div class="featured-post">
        <div class="featured-image">
          <img src="/images/YOW2.jpg" alt="Proses Pembuatan Keramik">
        </div>
        <div class="featured-text">
          <span class="category">Behind The Scenes</span>
          <h2>Filosofi Desain Minimalis di Balik Setiap Koleksi Kami</h2>
          <p class="excerpt">Temukan bagaimana kami menciptakan setiap mug dan plate dengan pendekatan minimalis yang tidak hanya indah tetapi juga fungsional untuk keseharian Anda.</p>
          <div class="post-meta">
            <span class="date">15 Maret 2025</span>
          </div>
        </div>
      </div>

      <!-- Blog Posts Grid -->
      <div class="blog-posts">
        <h2 class="section-title">Artikel Terbaru</h2>

        <div class="posts-grid">
          <!-- Post 1 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW5.jpg" alt="Merawat Keramik">
            </div>
            <div class="post-content">
              <span class="category">Tips & Perawatan</span>
              <h3>Tips Merawat Piring dan Mug Keramik agar Awet Sepanjang Masa</h3>
              <p class="excerpt">Pelajari cara merawat koleksi keramik Anda dengan benar untuk menjaga keindahan dan fungsionalitasnya dalam jangka panjang.</p>
              <div class="post-meta">
                <span class="date">10 Maret 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 2 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW6.jpg" alt="Inspirasi Dekorasi">
            </div>
            <div class="post-content">
              <span class="category">Inspirasi</span>
              <h3>Inspirasi Dekorasi Meja Makan Sederhana nan Elegan</h3>
              <p class="excerpt">Transformasi meja makan Anda dengan sentuhan elegan menggunakan koleksi mug dan plate kami. Ide sederhana untuk tampilan yang maksimal.</p>
              <div class="post-meta">
                <span class="date">5 Maret 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 3 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW7.jpg" alt="Sejarah Keramik">
            </div>
            <div class="post-content">
              <span class="category">Edukasi</span>
              <h3>Dari Tanah Liat ke Meja Anda: Proses Pembuatan Keramik Berkualitas</h3>
              <p class="excerpt">Jelajahi perjalanan panjang pembuatan keramik berkualitas tinggi, dari pemilihan material hingga proses finishing yang sempurna.</p>
              <div class="post-meta">
                <span class="date">28 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 4 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW8.jpg" alt="Warna dalam Hidup">
            </div>
            <div class="post-content">
              <span class="category">Lifestyle</span>
              <h3>Bagaimana Warna Mempengaruhi Pengalaman Minum Kopi Anda</h3>
              <p class="excerpt">Temukan bagaimana pemilihan warna pada mug dapat mempengaruhi mood dan pengalaman menikmati minuman favorit Anda.</p>
              <div class="post-meta">
                <span class="date">20 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 5 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW9.jpg" alt="Sustainable Living">
            </div>
            <div class="post-content">
              <span class="category">Sustainability</span>
              <h3>Pilihan Ramah Lingkungan: Mengapa Keramik Lebih Baik daripada Plastik</h3>
              <p class="excerpt">Pelajari mengapa beralih ke produk keramik tidak hanya baik untuk estetika tetapi juga untuk lingkungan dan kesehatan Anda.</p>
              <div class="post-meta">
                <span class="date">15 Februari 2025</span>
              </div>
            </div>
          </article>

          <!-- Post 6 -->
          <article class="blog-post">
            <div class="post-image">
              <img src="/images/YOW10.jpg" alt="Seasonal Collection">
            </div>
            <div class="post-content">
              <span class="category">New Collection</span>
              <h3>Memperkenalkan Koleksi Musim Semi: Warna-warna Cerah untuk Hari yang Lebih Berwarna</h3>
              <p class="excerpt">Temukan koleksi terbaru kami yang terinspirasi dari keindahan musim semi dengan palet warna yang segar dan menyegarkan.</p>
              <div class="post-meta">
                <span class="date">10 Februari 2025</span>
              </div>
            </div>
          </article>
        </div>
      </div>

      <!-- Newsletter Section -->
      <div class="newsletter-section">
        <div class="newsletter-content">
          <h2>Stay Updated</h2>
          <p>Dapatkan artikel terbaru, tips, dan penawaran eksklusif langsung di halaman Anda</p>
          <form class="newsletter-form">
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2025 Mug & Plate. All rights reserved.</p>
  </footer>
</body>
</html>
