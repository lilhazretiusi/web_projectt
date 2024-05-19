<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $sifre = $_POST['sifre'];

        if($email === "b231210088@sakarya.edu.tr" && $sifre === "5353"){
            header("Location: basarili.html");
            exit();
        }
        else{
            header("Location: giris.html");
            exit();
        }
    }

?>
