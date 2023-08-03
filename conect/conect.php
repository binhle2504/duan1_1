<?php

$ketnoi = mysqli_connect('localhost', 'root', '', 'du_an_1');
if ($ketnoi) {
    // echo "ket noi thanh cong";
} else {
    echo "ket noi that bai";
}
