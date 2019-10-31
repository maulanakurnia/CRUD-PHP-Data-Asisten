<?php
    session_start();
    $title = 'Ubah Data';
    include ('_partials/head.php');
    include ('../controller/fungsi_pesan.php');
    include ('../controller/query.php');
?>
<div class="container mt-4 col-8">
<a href="index.php" class="btn btn-success btn-sm mb-2"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <h4><b>Tambah Jadwal</b></h4>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?=$jdwl['id_jadwal'];?>">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nama Asisten</label>
                    <div class="col-sm-8">
                    <select class="custom-select" name="namasis">
                        <?php $asis=mysqli_fetch_array($query_join_id); ?>
                        <option selected value="<?= $asis['id_asisten']?>"><?= $asis['nama_asisten']?></option>
                        
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
                        <?php $jdwl=mysqli_fetch_array($query_jadwal_id); ?>
                        <option selected value="<?= $jdwl['lab']?>"><?= $jdwl['lab']?></option>

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

                        <option selected  value="<?= $jdwl['hari'];?>"><?= $jdwl['hari'];?></option>
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
                        <option selected  value="<?= $jdwl['waktu']?>"><?= $jdwl['waktu']?></option>
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
    include ('actions/update.php');
    include ('_partials/foot.php');
?>