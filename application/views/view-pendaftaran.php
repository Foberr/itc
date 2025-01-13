<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Teknologi Informasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1020;
            height: 70px;
            display: flex;
            align-items: center;
        }

        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('hero-image.jpg') no-repeat center center/cover;
            color: white;
            height: calc(100vh - 70px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        section {
            padding: 50px 0;
        }

        #home {
            height: 100vh;
            /* Full screen height for Home */
        }

        #about {
            background-color: #f8f9fa;
            height: 100vh;
            /* Full screen height for About */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #contact {
            background-color: #f8f9fa;
            height: 100vh;
            /* Full screen height for Contact */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #about h2,
        #contact h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #about p,
        #contact p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .contact-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }

        #pendaftaran {
            background-color: #f8f9fa;
            padding-top: 70px;
            /* Jarak dari navbar */
            padding-bottom: 50px;
            /* Tambahkan jarak bawah untuk estetika */
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container input,
        .form-container select,
        .form-container button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        #login {
            background-color: #f8f9fa;
            padding-top: 70px; /* Jarak dari navbar */
            padding-bottom: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-container input,
        .form-container button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-container button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Komunitas TI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pendaftaran">Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="hero">
        <h1>Selamat Datang di Komunitas Teknologi Informasi</h1>
        <p>Bersama, Kita Berbagi Pengetahuan, Belajar, dan Berkembang</p>
        <a href="#about" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
    </section>

    <!-- About Section -->
    <section id="about">
        <div>
            <h2>Tentang Komunitas Teknologi Informasi</h2>
            <p>Komunitas Teknologi Informasi (TI) adalah wadah bagi para profesional, pelajar, dan praktisi di bidang
                teknologi informasi untuk berbagi pengetahuan, pengalaman, dan solusi dalam perkembangan teknologi. Kami
                berfokus pada pengembangan diri anggota melalui diskusi, pelatihan, dan berbagai kegiatan berbasis
                teknologi.</p>
            <p>Tujuan utama komunitas ini adalah untuk menciptakan lingkungan yang mendukung pembelajaran dan inovasi
                dalam bidang TI. Kami percaya bahwa kolaborasi dan berbagi pengetahuan akan membantu meningkatkan
                kemampuan kita dalam menghadapi tantangan dunia teknologi yang terus berkembang.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div>
            <h2>Contact Form</h2>
            <p>If you have any questions or want to get in touch, please use the form below:</p>
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Pendaftaran Section -->
    <section id="pendaftaran">
        <!-- <?php echo form_open('pendaftaran/daftar') ?> -->
        <div>
            <h2>Form Pendaftaran</h2>
            <p>Isi formulir berikut untuk mendaftar sebagai anggota:</p>
            <form class="form-container">
                <input type="text" name="nim" placeholder="NIM" required>
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                <select name="jenis_kelamin" required>
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <input type="text" name="kelas" placeholder="Kelas" required>
                <input type="number" name="semester" placeholder="Semester" required>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </section>

    <!-- Login Section -->
    <section id="login">
        <div>
            <h2>Login</h2>
            <p>Masukkan email dan password Anda untuk masuk:</p>
            <form class="form-container">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
            <p>Belum punya akun? <a href="#pendaftaran">Daftar di sini</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Komunitas Teknologi Informasi. Semua Hak Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>