<?php
        include 'koneksi.php';

        $nama_lengkap = $_POST['nama_lengkap'] ?? '';
        $tempat_lahir = $_POST['tempat_lahir'] ?? '';
        $tanggal_lahir = $_POST['tanggal_lahir'] ?? '';
        $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
        $alamat = $_POST['alamat'] ?? '';
        $email = $_POST['email'] ?? '';
        $no_hp = $_POST['no_hp'] ?? '';
        $agama = $_POST['agama'] ?? '';

        $query = "INSERT INTO calon_siswa2 (nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, email, no_hp, agama) VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$email', '$no_hp', '$agama')";

        $result = mysqli_query($koneksi, $query);

        if ($result) {
             echo"<script>alert('Terima Kasih telah mendaftar !')</script>";
             echo"<script>alert('Mohon tunggu konfirmasi dari Admin melalui akun email anda !')</script>";
             echo"<script>alert('Link Pendaftaran PPDB akan dikirim melalui Email !')</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        mysqli_close($koneksi);
        echo"<script>
            window.location='index.php'
            </script>";
        ?>
