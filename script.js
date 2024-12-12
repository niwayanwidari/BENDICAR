// Fungsi untuk menampilkan pesan ketika tombol "Pesan Sekarang" ditekan
function pesanMobil(namaMobil) {
    alert(`Anda telah memilih ${namaMobil}. Hubungi kami melalui kontak untuk menyelesaikan pemesanan.`);
}

// Menambahkan efek animasi ketika menggulir ke bagian tertentu
document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll("nav ul li a");
    const sections = document.querySelectorAll("main section");

    // Menambahkan interaksi untuk menggulir ke bagian tertentu
    navLinks.forEach((link, index) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            sections[index].scrollIntoView({ behavior: "smooth" });
        });
    });

    // Efek animasi ketika bagian halaman masuk ke tampilan
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fade-in");
                }
            });
        },
        { threshold: 0.2 }
    );

    sections.forEach((section) => observer.observe(section));
});
