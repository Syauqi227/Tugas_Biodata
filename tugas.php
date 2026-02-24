<?php
// DATA DIRI 
$nama_lengkap = "Syauqi Athaya Ramadhani";
$nama_panggilan = "Syauqi";
$agama = "Islam";
$tempat_lahir = "Pati";
$tanggal_lahir = "22";
$bulan_lahir = "08";
$tahun_lahir = "2009";
$alamat = "Jatisari RT6 RW4 Mijen";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "+62 882-3326-1669";
$email = "kursibolong23@email.com";
$umur = date("Y") - $tahun_lahir;
$tahun_sekarang = date("Y");
$tahun_10 = $tahun_sekarang + 10;
$umur_10 = $umur + 10;
$keinginan_10tahun_lagi = "membuat game ataupun menjaga data";
$motto = "Pelajaran Datang Dari Hal Yang Menyakitkan";
$motto2 = "Pengalaman Adalah Guru Terbaik";
$foto = "Suqio.jpg";

// Rencana
$rencana = "belajar coding, ikut kursus cybersecurity, latihan CTF, dan latihan membuat game.";

// Kesukaan
$makanan_favorit = ["Telur Dadar", "Nasi Padang", "Bakso"];
$minuman_favorit = ["Air Putih", "Lemon Tea", "Es Teh"];
$hobi = ["Bermain", "Eksperimen PC"];

// Skill
$skill = [
    "Merakit PC" => 60,
    "Crimping LAN" => 50
];

// Riwayat Pendidikan
$pendidikan = [
    ["TK", "TKIT Baitussalam", "2014", "2016"],
    ["SD", "SDIT Miftahussalam", "2016", "2022"],
    ["SMP", "SMPN 23 Semarang", "2022", "2025"]
];

// Jadwal
$jadwal = [
    'Senin' => ['Matematika', 'Matematika', 'Sejarah', 'Istirahat', 'Agama Islam', 'Agama Islam', 'Agama Islam', 'Istirahat', 'B. Inggris', 'B. Inggris', 'B. Indo', 'B. Indo'],
    'Selasa' => ['IPAS', 'IPAS', 'IPAS', 'Istirahat', 'IPAS', 'PPKN', 'PPKN', 'Istirahat', 'B. Jawa', 'B. Jawa', 'Seni Musik', 'Seni Musik'],
    'Rabu' => ['PGD Bu Imanita', 'PGD Bu Imanita', 'PGD Bu Imanita', 'Istirahat', 'PGD Bu Imanita', 'PGD Pak Agung', 'PGD Pak Agung', 'Istirahat', 'GIM', 'GIM', 'GIM', 'GIM'],
    'Kamis' => ['Olahraga', 'Olahraga', 'Olahraga', 'Istirahat', 'Sejarah', 'B. Inggris', 'B. Inggris', 'Istirahat', 'Matematika', 'Matematika', 'B. Indo', 'B. Indo'],
    'Jumat' => ['Informatika', 'Informatika', 'KKA', 'Istirahat', 'KKA', 'IPAS', 'IPAS', 'Istirahat', 'PGD Pak Agung', 'PGD Pak Agung']
];

$jam_pelajaran = [
    "07:00–07:45", "07:45–08:30", "08:30–09:15", "09:15-09:30",
    "09:30–10:15", "10:15–11:00", "11:00–11:45", "11:45-12:30",
    "12:30–13:15", "13:15–14:00", "14:00–14:45", "14:45–15:30"
];

// Cek halaman yang diminta
$halaman = isset($_GET['page']) ? $_GET['page'] : 'biodata';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata <?= $nama_panggilan ?></title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #1e2a44;
            color: #e0e7ff;
            padding: 20px;
        }

      
        .kotak-utama {
            max-width: 1000px;
            margin: 0 auto;
            background: #1e293b;
            padding: 20px;
            border-radius: 20px;
            border: 1px solid #4b5563;
        }

        /* Judul */
        .judul {
            font-size: 32px;
            color: #c4b5fd;
            margin-bottom: 20px;
            border-left: 5px solid #a78bfa;
            padding-left: 15px;
        }

        .judul-kecil {
            font-size: 24px;
            color: #c4b5fd;
            margin: 20px 0 15px;
            border-bottom: 2px dotted #94a3b8;
            padding-bottom: 8px;
        }

        /* Motto berjalan dari kanan ke kiri */
        .motto-container {
            background: #334155;
            border-radius: 50px;
            margin: 20px 0;
            overflow: hidden;
            white-space: nowrap;
        }

        .motto {
            display: inline-block;
            padding:12px 100%;
            font-size: 20px;
            font-weight: bold;
            color: #f0f9ff;
            animation: jalan 20s linear infinite;
        }

        @keyframes jalan {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        /* Layout 2 kolom */
        .dua-kolom {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Kotak kartu */
        .kartu {
            background: #2d374b;
            padding: 20px;
            border-radius: 15px;
            border: 1px solid #4a5568;
            margin-bottom: 20px;
        }

        /* Baris info */
        .baris-info {
            display: flex;
            margin: 10px 0;
            border-bottom: 1px dashed #4a5568;
            padding-bottom: 8px;
            flex-wrap: wrap;
            word-break: break-all;     
        }

        .label-info {
            width: 130px;
            font-weight: bold;
            color: #c4b5fd;
        }

        .isi-info {
            color: #f0f9ff;
            padding-left: 10px;
        }

        /* Foto */
        .foto {
            width: 150px;
            height: 150px;
            background: #4a5568;
            border-radius: 50%;
            margin: 20px auto;
            border: 4px solid #a78bfa;
            overflow: hidden;
        }

        .foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* List */
        ul, ol {
            margin: 10px 0 10px 30px;
            color: #f0f9ff;
        }

        /* Progress bar */
        .skill-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 15px 0;
        }

        .nama-skill {
            width: 100px;
            font-weight: bold;
            color: #c4b5fd;
        }

        .progress-bg {
            flex: 1;
            height: 25px;
            background: #1e293b;
            border-radius: 15px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, #8b5cf6, #d946ef);
            width: 0%;
            border-radius: 15px;
            line-height: 25px;
            text-align: center;
            font-weight: bold;
            color: white;
            font-size: 14px;
            transition: width 1.5s ease;
        }

        /* Tombol */
        .tombol {
            display: inline-block;
            background: #8b5cf6;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            margin: 20px 0;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .tombol:hover {
            background: #7c3aed;
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
            margin: 15px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #1e293b;
        }

        th {
            background: #8b5cf6;
            color: white;
            padding: 10px;
            font-weight: bold;
        }

        td {
            padding: 8px;
            border: 1px solid #4a5568;
            text-align: center;
        }

        /* Teks 10 tahun */
        .teks-10-tahun {
            font-size: 18px;
            line-height: 1.6;
            background: #374151;
            padding: 20px;
            border-radius: 15px;
        }

        /* Untuk HP */
        @media (max-width: 700px) {
            .dua-kolom {
                grid-template-columns: 1fr;
            }
            .kartu{
               min-width: 0;
            }
        }
    </style>
</head>
<body>

<?php if ($halaman == 'biodata'): ?>
    <!-- HALAMAN BIODATA -->
    <div class="kotak-utama">
        <h1 class="judul">📋 Biodata Diri</h1>

        <div style="background: #374151; padding: 15px; border-radius: 30px; margin-bottom: 15px;">
            <span style="font-size: 24px; font-weight: bold;">👤 <?= $nama_lengkap ?></span>
        </div>

        <!-- MOTTO BERJALAN DARI KANAN KE KIRI -->
        <div class="motto-container">
            <div class="motto">
                 ✦ <?= $motto ?> ✦ <?= $motto2 ?> ✦ 
            </div>
        </div>

        <div class="dua-kolom">
            <!-- KOLOM KIRI: Data Diri -->
            <div class="kartu">
                <h2 class="judul-kecil">🧑 Data Diri</h2>

                <div class="baris-info">
                    <span class="label-info">Nama </span>
                    <span class="isi-info"><?= $nama_lengkap ?> (<?= $nama_panggilan ?>)</span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Agama </span>
                    <span class="isi-info"><?= $agama ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Tempat/Tgl Lahir </span>
                    <span class="isi-info"><?= $tempat_lahir ?>, <?= $tanggal_lahir ?>-<?= $bulan_lahir ?>-<?= $tahun_lahir ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Alamat </span>
                    <span class="isi-info"><?= $alamat ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Gender </span>
                    <span class="isi-info"><?= $gender ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Kewarganegaraan </span>
                    <span class="isi-info"><?= $kewarganegaraan ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">No WA </span>
                    <span class="isi-info"><?= $no_wa ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Email </span>
                    <span class="isi-info"><?= $email ?></span>
                </div>
                <div class="baris-info">
                    <span class="label-info">Umur </span>
                    <span class="isi-info"><?= $umur ?> tahun</span>
                </div>

                <div class="foto">
                    <?php if (!empty($foto)): ?>
                        <img src="<?= $foto ?>" alt="Foto <?= $nama_lengkap ?>">
                    <?php else: ?>
                        Foto
                    <?php endif; ?>
                </div>
            </div>

            <!-- KOLOM KANAN: Kesukaan & Skill -->
            <div class="kartu">
                <h2 class="judul-kecil">🌟 Kesukaan & Skill</h2>

                <p><strong>🍛 Makanan Favorit</strong></p>
                <ul>
                    <?php foreach ($makanan_favorit as $m): ?>
                        <li><?= $m ?></li>
                    <?php endforeach; ?>
                </ul>

                <p><strong>🥤 Minuman Favorit</strong></p>
                <ol>
                    <?php foreach ($minuman_favorit as $m): ?>
                        <li><?= $m ?></li>
                    <?php endforeach; ?>
                </ol>

                <p><strong>🎯 Hobi</strong></p>
                <ol>
                    <?php foreach ($hobi as $h): ?>
                        <li><?= $h ?></li>
                    <?php endforeach; ?>
                </ol>

                <p><strong>🧠 Skill</strong></p>
                <?php foreach ($skill as $nama_skill => $nilai): ?>
                    <div class="skill-item">
                        <span class="nama-skill"><?= $nama_skill ?></span>
                        <div class="progress-bg">
                            <div class="progress-fill" data-target="<?= $nilai ?>">0%</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 10 TAHUN LAGI -->
        <div class="kartu">
            <h2 class="judul-kecil">🌅 10 Tahun Lagi</h2>
            <div class="teks-10-tahun">
                Hai, namaku <strong><?= $nama_panggilan ?></strong>. Saat ini tahun <strong><?= $tahun_sekarang ?></strong>,
                aku berumur <strong><?= $umur ?> tahun</strong>. 10 tahun lagi di tahun <strong><?= $tahun_10 ?></strong>,
                di umur <strong><?= $umur_10 ?></strong> aku ingin menjadi <strong>Game Developer atau Cyber Security</strong>.
                Aku ingin <strong><?= $keinginan_10tahun_lagi ?></strong>. Rencana yang akan aku tempuh adalah
                <strong><?= $rencana ?></strong>
            </div>
        </div>

        <!-- RIWAYAT PENDIDIKAN -->
        <div class="kartu">
            <h2 class="judul-kecil">🏫 Riwayat Pendidikan</h2>
            <div class="table-wrapper">
                <table>
                    <tr>
                        <th>Tingkat</th>
                        <th>Nama Sekolah</th>
                        <th>Mulai</th>
                        <th>Lulus</th>
                    </tr>
                    <?php foreach ($pendidikan as $row): ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

        <!-- TOMBOL KE JADWAL -->
        <div style="text-align: center;">
            <a href="?page=jadwal" class="tombol">📅 Lihat Jadwal Pelajaran & Piket</a>
        </div>
    </div>

<?php elseif ($halaman == 'jadwal'): ?>
    <!-- HALAMAN JADWAL -->
    <div class="kotak-utama">
        <h1 class="judul">🗓️ Jadwal Pelajaran & Piket</h1>

        <!-- TOMBOL KEMBALI -->
        <div style="text-align: right; margin-bottom: 20px;">
            <a href="?" class="tombol" style="padding: 8px 20px;">« Kembali ke Biodata</a>
        </div>

        <!-- JADWAL PELAJARAN -->
        <div class="kartu">
            <h2 class="judul-kecil">📚 Jadwal Pelajaran</h2>
            <div class="table-wrapper">
                <table>
                    <tr>
                        <th>Jam Ke-</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                    </tr>
                    <?php for ($i = 0; $i < 12; $i++): ?>
                    <tr>
                        <td><?= ($i + 1) ?> (<?= $jam_pelajaran[$i] ?>)</td>
                        <td><?= $jadwal['Senin'][$i] ?? '-' ?></td>
                        <td><?= $jadwal['Selasa'][$i] ?? '-' ?></td>
                        <td><?= $jadwal['Rabu'][$i] ?? '-' ?></td>
                        <td><?= $jadwal['Kamis'][$i] ?? '-' ?></td>
                        <td><?= $jadwal['Jumat'][$i] ?? '-' ?></td>
                    </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div>

        <!-- JADWAL PIKET -->
        <div class="kartu">
            <h2 class="judul-kecil">🧹 Jadwal Piket Kelas</h2>
            <div class="table-wrapper">
                <table>
                    <tr>
                        <th>Hari</th>
                        <th>Petugas Piket</th>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>Cindy, Nata, Tsabita, Naila, Kartika, Habibi, Yusuf, Rasya</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>Keisha, Shafanira, Aurora, Sila, <span style="color: pink;"><b>Syauqi</b></span>, Nail, Wahyu</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>Anin, Shifa, Tania, Fasya, Eka, Dzaky, Vino</td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>Aida, Maharani, Alya, Denia, Ravid, Ibnu, Tegar</td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>Aqila, Alais, Gendhis, Cloudya, Aziz, Raka, Rayhan</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- TOMBOL KEMBALI -->
        <div style="text-align: center; margin-top: 20px;">
            <a href="?" class="tombol">« Kembali ke Biodata</a>
        </div>
    </div>
<?php endif; ?>

<!-- JAVASCRIPT UNTUK PROGRESS BAR (SESUAI KETENTUAN GURU) -->
<script>
// Fungsi untuk menjalankan progress bar
function jalankanProgressBar() {
    // Ambil semua progress bar
    var bars = document.querySelectorAll('.progress-fill');
    
    for (var i = 0; i < bars.length; i++) {
        var bar = bars[i];
        // Ambil angka target dari attribute data-target
        var target = bar.getAttribute('data-target');
        
        // Set width sesuai target
        bar.style.width = target + '%';
        // Tampilkan angkanya
        bar.innerHTML = target + '%';
    }
}

// Jalankan saat halaman selesai loading
window.onload = function() {
    jalankanProgressBar();
};
</script>

</body>
</html>