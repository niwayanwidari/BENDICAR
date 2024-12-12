<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil BendiCar</title>
    <link rel="stylesheet" href="tampilan.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        
        <h1>Rental Mobil BendiCar</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#mobil">Daftar Mobil</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>
    <main>
        <section id="mobil">
            <h2>Daftar Mobil</h2>
            <div class="mobil-container">
                <!-- Kartu Mobil -->
                <div class="mobil-card">
                    <img src="hrv.jpg" alt="HRV">
                    <h3>HRV</h3>
                    <p>Harga: Rp 500.000 / hari</p>
                    <button onclick="pesanMobil('HRV')">Pesan Sekarang</button>
                </div>
                <div class="mobil-card">
                    <img src="brio.png" alt="Honda Brio">
                    <h3>Honda Brio</h3>
                    <p>Harga: Rp 400.000 / hari</p>
                    <button onclick="pesanMobil('Honda Brio')">Pesan Sekarang</button>
                </div>
                <div class="mobil-card">
                    <img src="alphard.jpg" alt="Alpard">
                    <h3>Alphard</h3>
                    <p>Harga: Rp 450.000 / hari</p>
                    <button onclick="pesanMobil('Alpard')">Pesan Sekarang</button>
                </div>
                <div class="mobil-card">
                    <img src="lamborghini.jpg" alt="Lamborghini">
                    <h3>Lamborghini</h3>
                    <p>Harga: Rp 5.000.000 / hari</p>
                    <button onclick="pesanMobil('Lamborghini')">Pesan Sekarang</button>
                </div>
                <div class="mobil-card">
                    <img src="xpander.jpg" alt="Mitsubishi Xpander">
                    <h3>Mitsubishi Xpander</h3>
                    <p>Harga: Rp 600.000 / hari</p>
                    <button onclick="pesanMobil('Mitsubishi Xpander')">Pesan Sekarang</button>
                </div>
                <div class="mobil-card">
                    <img src="fortuner.jpg" alt="Toyota Fortuner">
                    <h3>Toyota Fortuner</h3>
                    <p>Harga: Rp 1.000.000 / hari</p>
                    <button onclick="pesanMobil('Toyota Fortuner')">Pesan Sekarang</button>
                </div>
            </div>
        </section>
        <section id="kontak">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami untuk informasi lebih lanjut:</p>
            <ul>
                <li>Telepon: 0812-3456-7890</li>
                <li>Email: info@bendicar.com</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Rental BendiCar. All rights reserved.</p>
    </footer>
</body>
</html>
