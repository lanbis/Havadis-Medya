<?php
try {
    $vt = new PDO("mysql:dbname=havadis;host=localhost;charset=utf8","root", "123456");
    $vt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}?>