<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script>
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: "<?= base_url('getmenu') ?>",
                success: function (response) {
                    $('#dataMenu').html(response);
                }
            })
        })

        function changeTheme() {
                var theme = document.getElementById('darkMode');

                if (theme.checked == true) {
                    $('#thisBody').attr("data-bs-theme", "dark");
                    $('#myTable').removeClass("table-secondary");
                    $('#myTable').addClass("table-dark");
                } else {
                    $('#thisBody').removeAttr("data-bs-theme");
                    $('#myTable').removeClass("table-dark");
                    $('#myTable').addClass("table-secondary");
                }
            }
    </script>
</head>
<body id="thisBody">
    <div class="position-absolute top-0 end-0 m-3">
        <div class="form-check form-switch">
            <input type="checkbox" id="darkMode" class="form-check-input" role="switch" onchange="changeTheme()">
            <label for="darkMode">Click here to change Theme</label>
        </div>
    </div>
    <div class="container">
        <center><p class="display-5 mt-3">Tambah Data</p></center>
        <table class="m-2" style="width: 100%;">
            <form id="dataInput">
                <input type="hidden" id="id_menu">
                <tr>
                    <th>Nama Buah</th>
                    <th>:</th>
                    <td><input type="text" id="nama_menu" class="form-control" required></td>
                </tr>
                <tr>
                    <th>Jenis Menu</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jenis" id="makanan" class="form-check-input" required>
                        <label for="makanan">Makanan</label>
                        <input type="radio" name="jenis" id="minuman" class="form-check-input">
                        <label for="minuman">Makanan</label>
                        <input type="radio" name="jenis" id="snack" class="form-check-input">
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
                    <td><button type="submit" class="btn btn-primary">Simpan Data</button></td>
                </tr>
            </form>
        </table>
        <div id="dataMenu">

        </div>
    </div>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>