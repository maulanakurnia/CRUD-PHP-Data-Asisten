<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['namasis'])){
        $namasis = $_POST['namasis'];
        $namalab = $_POST['namalab'];
        $hari = $_POST['hari'];
        $waktu = $_POST['waktu'];
        if((!empty($namasis)) and (!empty($namalab) and (!empty($hari)) and (!empty($waktu)) )){
            if($query = mysqli_query($konek, "INSERT INTO jadwal_mengajar VALUES('','$namasis','$namalab','$hari','$waktu')") or die(mysqli_error($konek))){
            redirect('
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data telah <strong>DITAMBAHKAN!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>', '/Data-Asisten/views/');
            }
            else {
                redirect('
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data <strong>GAGAL!</strong> Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>', '/Data-Asisten/views/');
            }
        }
    }
}