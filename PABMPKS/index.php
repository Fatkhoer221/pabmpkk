<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MPK 2025/2026</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

<!-- Header -->
<header class="sticky top-0 z-50 w-full bg-red-800 text-white shadow-md">
  <div class="container mx-auto flex h-16 items-center justify-between px-4">
    <div class="flex items-center gap-3 text-lg font-bold">
      <!-- Logo dari folder images -->
      <img src="assets/images/ddav.png" alt="Logo MPK" class="h-10 w-10 rounded-full object-cover">
      <span>MPK 2025/2026</span>
    </div>
    <nav class="hidden md:flex items-center gap-6">
      <a href="#alur" class="hover:underline">Alur</a>
      <a href="#info" class="hover:underline">Info</a>
      <a href="#kontak" class="hover:underline">Kontak</a>
    </nav>
  </div>
</header>

<!-- Hero Section -->
<section class="relative w-full py-20 text-center text-white bg-cover bg-center" style="background-image: url('assets/images/DKS2025.jpg');">
  <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
  <div class="relative z-10 container mx-auto px-4">
    <h1 class="text-4xl font-bold mb-6">SELAMAT DATANG DI PENDAFTARAN ANGGOTA BARU MPK 2025/2026</h1>
    <p class="text-lg mb-8">Bergabunglah dengan Majelis Perwakilan Kelas dan jadilah bagian dari perubahan!</p>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSfNs-mkYLDSNi2FeUP5on61hkSPyr4xIq-61Mq3BndQxx0krw/viewform?usp=header" 
   target="_blank"
   class="bg-white text-red-800 px-6 py-3 rounded-full font-semibold hover:bg-gray-100">
   DAFTARKAN DIRI
</a>
  </div>
</section>

<!-- Alur Section -->
<section id="alur" class="py-16 bg-white">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">ALUR PENDAFTARAN ANGGOTA BARU</h2>
    <div class="grid md:grid-cols-3 gap-6">
      <?php
      $steps = [
        "Mengisi formulir pendaftaran dengan lengkap dan benar.",
        "Mengunggah dokumen persyaratan yang dibutuhkan.",
        "Verifikasi data dan dokumen oleh panitia.",
        "Mengikuti sesi wawancara.",
        "Pengumuman hasil seleksi.",
        "FIRST MEET WITH MPK'28."
      ];
      foreach ($steps as $i => $step) {
        echo '<div class="text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-red-700 text-white flex items-center justify-center text-2xl font-bold shadow">' . ($i + 1) . '</div>
                <div class="bg-gray-100 p-4 border-t-4 border-red-700 shadow">' . $step . '</div>
              </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- Informasi Section -->
<section id="info" class="py-16 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">INFORMASI & PERSYARATAN</h2>
    <div class="grid lg:grid-cols-2 gap-12">
      <div>
        <h3 class="text-2xl font-semibold text-red-700 mb-4">Informasi Umum</h3>
        <p class="text-gray-700 mb-4">
          Penerimaan Anggota Baru (PAB) MPK 2025/2026 adalah kesempatan bagi siswa/i berdedikasi untuk bergabung
          dengan Majelis Perwakilan Kelas. Pendaftaran dilakukan secara online.
        </p>
        <p class="text-gray-700">Pastikan mengisi semua data dengan benar dan siapkan dokumen sebelum mendaftar.</p>
      </div>
      <div>
        <h3 class="text-2xl font-semibold text-red-700 mb-4">Petunjuk Umum</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>1. Silakan mendaftar melalui laman PENDAFTARAN, isi semua kolom lalu klik SIMPAN.</li>
          <li>2. Kemudian cetak formulir pendaftaran anda.</li>
          <li>3. Setelah dicetak, isi kolom MOTO yang telah disediakan dan tempel FOTO 3x4.</li>
          <li>4. Ikuti seleksi sesuai jadwal dan ikuti arahan selanjutnya dari PAB MPK 2025.</li>
          <li>5. Formulir Pendaftaran WAJIB dibawa pada saat seleksi.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Kontak Section -->
<section id="kontak" class="py-16 bg-red-800 text-white">
  <div class="container mx-auto text-center space-y-4 text-lg">
    <h2 class="text-3xl font-bold mb-6">KONTAK KAMI</h2>
    <p>📍 Jl. R.A. Kartini No.39, Keputran, Kec. Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51128</p>
    <p>📧 <a href="mailto:info@mpk.org" class="underline">info@mpk.org</a></p>
    <p>🌐 <a href="https://mpk.sman1pekalongan.sch.id" class="underline" target="_blank">WEBSITE MPK</a></p>

    <?php
    // Kontak WhatsApp
    $kontaks = [
      [
        "wa" => "6285727847103",
        "nama" => "Kak Dhika",
        "tampil" => "0857-2784-7103"
      ],
      [
        "wa" => "6289666019455",
        "nama" => "Kak Alexa",
        "tampil" => "0896-6601-9455"
      ]
    ];
    foreach ($kontaks as $kontak) {
      $pesan = "Halo " . $kontak['nama'] . "! Saya tertarik untuk bertanya-tanya lebih lanjut mengenai MPK nih. Apakah boleh? Terima kasih.";
      $link = "https://wa.me/" . $kontak['wa'] . "?text=" . urlencode($pesan);
      echo '<p>📞 <a href="' . $link . '" target="_blank" class="underline hover:text-gray-300">' . $kontak['tampil'] . ' (' . $kontak['nama'] . ')</a></p>';
    }
    ?>
  </div>
</section>

<!-- Footer -->
<footer class="py-6 bg-black text-white text-center text-sm">
  <p>&copy; <?php echo date("Y"); ?> MPK. Hak cipta dilindungi undang-undang.</p>
</footer>

</body>
</html>
