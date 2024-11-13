<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebras Challenge Indonesia 2024</title>
    
    <!-- Link ke style.css -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- Gambar Banner -->
    <img src="<?php echo base_url('assets/images/bebras.jpg'); ?>" alt="Bebras Challenge Indonesia 2024" class="banner-image">
    
    <!-- Judul Jadwal -->
    <div class="table-container">
        <h3>Jadwal Bebras</h3>
        
        <!-- Tabel Jadwal -->
        <table class="table">
            <thead>
                <tr>
                    <th>Hari/Tanggal</th>
                    <th>Kegiatan</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin, 15 November 2024</td>
                    <td>Registrasi Peserta</td>
                    <td>08:00 - 09:00 WIB</td>
                    <td>Aula Polinema</td>
                </tr>
                <tr>
                    <td>Selasa, 16 November 2024</td>
                    <td>Sesi Tantangan 1</td>
                    <td>09:00 - 11:00 WIB</td>
                    <td>Lab Komputer 1</td>
                </tr>
                <tr>
                    <td>Rabu, 17 November 2024</td>
                    <td>Sesi Tantangan 2</td>
                    <td>13:00 - 15:00 WIB</td>
                    <td>Lab Komputer 2</td>
                </tr>
                <tr>
                    <td>Kamis, 18 November 2024</td>
                    <td>Pengumuman Pemenang</td>
                    <td>10:00 - 11:00 WIB</td>
                    <td>Aula Polinema</td>
                </tr>
            </tbody>
        </table>
    </div>
	<div class="button">
    <img src="<?php echo base_url('assets/images/beaver.jpg'); ?>" alt="Beaver" class="beaver-img">
    <img src="<?php echo base_url('assets/images/waktu.png'); ?>" alt="Waktu" class="waktu-img">
	</div>

</div>

</body>
</html>
