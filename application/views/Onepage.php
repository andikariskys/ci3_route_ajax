<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/myscript.js') ?>"></script>
</head>
<body id="thisBody">
    <div class="position-absolute top-0 end-0 m-3">
        <div class="form-check form-switch">
            <input type="checkbox" id="darkMode" class="form-check-input" role="switch" onchange="changeTheme()">
            <label for="darkMode">Click here to change Theme</label>
        </div>
    </div>
    <div class="container">
        <center><p class="display-5 mt-3" id="title_form">Tambah Data</p></center>
        <table class="m-2" style="width: 100%;">
                <input type="hidden" id="id_menu">
                <tr>
                    <th>Nama Menu</th>
                    <th>:</th>
                    <td><input type="text" id="nama_menu" class="form-control" required></td>
                </tr>
                <tr>
                    <th>Jenis Menu</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis" id="makanan" class="form-check-input" value="makanan" required>
                        <label for="makanan">Makanan</label>
                        <input type="radio" name="jenis" id="minuman" class="form-check-input" value="minuman">
                        <label for="minuman">Minuman</label>
                        <input type="radio" name="jenis" id="snack" class="form-check-input" value="snack">
                        <label for="snack">Sanck</label>
                    </td>
                </tr>
                <tr>
                    <th>Harga Menu</th>
                    <th>:</th>
                    <td><input type="number" id="harga_menu" class="form-control" required><br></td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>
                        <button type="submit" class="btn btn-primary" id="btn_simpan" onclick="simpanMenu()" >Simpan Data</button>
                        <button type="submit" class="btn btn-success" id="btn_simpan_edit" onclick="simpanEditMenu()" hidden>Simpan Edit Data</button>
                        <button class="btn btn-secondary" onclick="resetForm()" id="btn_reset" hidden>Batal</button>
                    </td>
                </tr>
        </table>
        <div id="dataMenu">

        </div>
    </div>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>