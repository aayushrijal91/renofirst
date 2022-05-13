<?php
$site = "Reno First";
$phone_number = "1300 775 634";
$admin_email = 'arijal@aiims.com.au';
$bcc_email = "";
$no_reply_email = 'no-reply@icfitouts.com.au';
$recaptcha_client_secret = '6LeSsm8eAAAAABTDNbqczWmMgvjWjRMmpFPQQnxH';
$recaptcha_server_secret = '6LeSsm8eAAAAAMOIvIQQ43lCdFz_wswrwZgqNKF2';

function renderImg($filename, $folder)
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . ">";
}
