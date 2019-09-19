<?php
if($_POST["kritik"]) {
    mail("mfawwaz13@gmail.com", "Kritik & Saran Pengguna", $_POST["kritik"], "From: muhammadfawwaz1311@gmail.com");
}
?>