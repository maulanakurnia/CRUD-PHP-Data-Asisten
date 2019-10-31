<?php
    session_start();
    $title = 'Jadwal Asisten';
    include ('_partials/head.php');
    include ('../controller/query.php')

?>
    <div class="container mt-4">
    <?php
        if (isset($_GET['pesan']) && isset($_SESSION[$_GET['pesan']])) {
        echo "<div class=pesan>";
        echo $_SESSION[$_GET['pesan']];
        echo "</div>";
        unset($_SESSION[$_GET['pesan']]);
        }
    ?>
        <div class="justify-content-end d-flex">
            <a href="tambah.php" class="btn btn-primary btn-sm mb-2"><i class="fas fa-plus"></i> Tambah Jadwal</a>
        </div>
        <table class="table table-striped table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Asisten</th>
                    <th scope="col">Nama Laboratorium</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                while($data=mysqli_fetch_array($query_join)){
                ?>
                    <tr>
                        <th><?= $no++?></th>
                        <td><?= $data['nama_asisten'];?></td>
                        <td><?= $data['lab'];?></td>
                        <td><?= $data['hari'];?></td>
                        <td><?= $data['waktu'];?></td>
                        <td>
                            <a href="ubah.php?id=<?= $data['id_jadwal']?>" class="badge badge-warning text-white">ubah</a>
                            <a href="actions/delete.php?id=<?= $data['id_jadwal']?>" class="badge badge-danger" onclick="return confirm('Yakin Ingin Menghapus data ini??')">hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

<?php 
    include ('_partials/foot.php');
?>