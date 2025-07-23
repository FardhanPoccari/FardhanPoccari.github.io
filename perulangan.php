<?php
$status_tugas = "dikerjakan"; 

if ($status_tugas == "belum") {
    echo "Ayo mulai kerjakan sekarang!";
} elseif ($status_tugas == "dikerjakan") {
    echo "Bagus, lanjutkan sampai selesai!";
} elseif ($status_tugas == "selesai") {
    echo "Hebat! Sekarang waktunya bersantai.";
} else {
    echo "Status tidak dikenali. Coba periksa kembali.";
}
?>
