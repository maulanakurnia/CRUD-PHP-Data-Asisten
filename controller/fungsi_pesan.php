<?php
function set_session_pesan($pesan) {
    $pesan_id = sha1(microtime(true));
    $_SESSION[$pesan_id] = $pesan;
 
    return $pesan_id;
}

function redirect($pesan, $page=FALSE) {
    $data = array();
    $_GET['pesan'] = set_session_pesan($pesan);
    foreach ($_GET as $n=>$v) {
        $data[] = "{$n}={$v}";
    }
    if (count($data) > 0) {
        $data = '?'.implode('&',$data);
    } else {
        $data = '';
    }
 
    if (is_string($page)) {
        $lokasi = $page;
    } else {
        $lokasi = $_SERVER['SCRIPT_NAME'];
    }
 
    $http = (!isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS'])!='on')?'http':'https';
 
    header("Location: {$http}://{$_SERVER['HTTP_HOST']}{$lokasi}{$data}");
    exit;
}
?>