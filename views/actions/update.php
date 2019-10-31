<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $id_jadwal = $_POST['id'];
        $namasis = $_POST['namasis'];
        $namalab = $_POST['namalab'];
        $hari = $_POST['hari'];
        $waktu = $_POST['waktu'];
    
        if(!empty($id) and (!empty($id_jadwal)) and (!empty($namasis)) and (!empty($namalab) and (!empty($hari)) and (!empty($waktu)) )){
            if($query = mysqli_query($konek, "UPDATE jadwal_mengajar SET id_asisten = '$namasis', lab = '$namalab', hari = '$hari', waktu = '$waktu' WHERE id_jadwal = '$id_jadwal'")){
            redirect('
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data telah <strong>DIUBAH!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>', '/Data-Asisten/views/');
            }
            else {
                redirect('
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data <strong>GAGAL!</strong> Diubah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>', '/Data-Asisten/views/');
            }
        }
    }
}