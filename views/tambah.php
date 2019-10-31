<?php
    $title = 'Tambah Data';
    include ('../controller/fungsi_pesan.php');
    include ('_partials/head.php');
    include ('../controller/query.php');

    session_start();
?>
<div class="container mt-4 col-8">
    <a href="index.php" class="btn btn-success btn-sm mb-2"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <h4><b>Tambah Jadwal</b></h4>
            <form method="POST">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Asisten</label>
                    <div class="col-sm-8">
                    <select class="custom-select" name="namasis">
                        <option selected Disabled>Pilih Asisten</option>
                        <?php
                            while($data=mysqli_fetch_array($query_asisten)){
                        ?>
                        <option value="<?= $data['id_asisten'];?>"><?= $data['nama_asisten'];?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Laboratorium</label>
                    <div class="col-sm-8">
                    <select class="custom-select" name="namalab">
                        <option selected Disabled>Pilih Lab</option>
                        <option value="Lab Jaringan">Lab Jaringan</option>
                        <option value="Lab Komputasi">Lab Komputasi</option>
                        <option value="Lab Basis Data">Lab Basis Data</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Hari</label>
                    <div class="col-sm-8">
                    <select class="custom-select" name="hari">
                        <option selected Disabled>Pilih Hari</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Kamis">Kamis</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Waktu</label>
                    <div class="col-sm-8">
                    <select class="custom-select" name="waktu">
                        <option selected Disabled>Pilih Waktu</option>
                        <option value="08.10-10.00">08.10-10.00</option>
                        <option value="10.30-12.30">10.30-12.30</option>
                        <option value="13.00-15.00">13.00-15.00</option>
                    </select>
                    </div>
                </div>
                <button class="btn btn-primary text-white btn-block" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php 
    include ('actions/insert.php');
    include ('_partials/foot.php');
?>