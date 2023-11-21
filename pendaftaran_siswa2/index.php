<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Formulir Pendaftaran</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>FORMULIR PENDAFTARAN</h1>
            <p>Ini adalah website pendaftaran PPDB SMKS AL-FARISI Leles</p>
        </div>

        <!-- Tambahkan tag form di sini -->
        <form action="proses_daftar.php" method="POST">
            
            <!-- Tabel untuk Formulir Pendaftaran -->
            <table class="content">
                <!-- Baris 1: Nama Lengkap -->
                <tr class="form-row">
                    <td><label for="nama_lengkap">Nama Lengkap</label></td>
                    <td>:</td>
                    <td><input class="full-input" type="text" name="nama_lengkap" required></td>
                </tr>

                <!-- Baris 2: Tempat Lahir -->  
                <tr class="form-row">
                    <td><label for="tempat_lahir">Tempat Lahir</label></td>
                    <td>:</td>
                    <td><input class="full-input" type="text" name="tempat_lahir" required></td>
                </tr>

                <!-- Baris 3: Tanggal Lahir -->
                <tr class="form-row">
                    <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
                    <td>:</td>
                    <td><input class="full-input" type="date" name="tanggal_lahir" required></td>
                </tr>

                <!-- Baris 4: Kota -->
                <tr class="form-row">
                    <td><label for="agama">Agama</label></td>
                    <td>:</td>
                    <td>
                        <select class="full-input" name="agama" required>
                            <option>Islam</option>
                            <option>Kristen Protestan</option>
                            <option>Kristen Katolik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Kongkhucu</option>
                        </select>
                    </td>
                </tr>                

                <!-- Baris 5: Jenis Kelamin -->
                <tr class="form-row">
                    <td><label>Jenis Kelamin</label></td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="pria" required> Pria
                        <input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan
                    </td>
                </tr>

                <!-- Baris 6: Alamat -->
                <tr class="form-row">
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td><textarea class="full-input" name="alamat" cols="22" rows="3" required></textarea></td>
                </tr>

                <!-- Baris 7: E-mail -->
                <tr class="form-row">
                    <td><label for="email">E-mail</label></td>
                    <td>:</td>
                    <td><input class="full-input" type="email" name="email" required></td>
                </tr>

                <!-- Baris 8: No HP -->
                <tr class="form-row">
                    <td><label for="no_hp">No Hp</label></td>
                    <td>:</td>
                    <td><input class="full-input" type="number" name="no_hp" required></td>
                </tr>



                <!-- Baris 9: Tombol Simpan dan Batal -->
                <!-- <tr class="form-row">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input class="form-submit" type="submit" name="submit" value="Simpan"/>
                        <input class="form-submit" type="reset" name="reset" value="Reset" />
                    </td>
                </tr> -->
                <tr>
                    <td>&nbsp;</td>
                </tr>
                
            </table>
            <div class="form-button">
    <button type="submit">Daftar</button>
    <button type="reset">Reset</button>
</div>

        </form> <!-- Tutup tag form di sini -->

    </div>

</body>
</html>
