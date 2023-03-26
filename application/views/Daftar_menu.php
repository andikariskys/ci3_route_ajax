<center><p class="display-5">Daftar Menu</p></center>
<table class="table table-hover table-secondary table-striped" id="myTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach ($data_menu as $dm) : ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dm->nama ?></td>
                <td><?= $dm->jenis ?></td>
                <td>Rp. <?= $dm->harga ?></td>
                <td><button class="btn btn-danger" onclick="hapusData('<?= $dm->id ?>')">Hapus</button></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>