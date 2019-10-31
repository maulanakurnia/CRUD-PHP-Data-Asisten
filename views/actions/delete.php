<?php
include ('../../config/koneksi.php');
include ('../../controller/fungsi_pesan.php');
session_start();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(isset($_GET['id'])){
            $id_jadwal = $_GET['id'];
            if((!empty($id_jadwal))){
                if($query = mysqli_query ($konek, "DELETE FROM jadwal_mengajar WHERE id_jadwal='$id_jadwal'") or die(mysqli_error($konek))){
                redirect('
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data telah <strong>DIHAPUS!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>', '/Data-Asisten/views/'); 
                }
                else {
                    redirect('
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data <strong>GAGAL!</strong> Dihapus!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>', '/Data-Asisten/views/');
                }
            }
        }
    }