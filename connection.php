<?php
try {
    // $con = new PDO('mysql:host=localhost;dbname=id21372845_laftah','id21372845_laftahbashayer','Bashayer@2024');
    $con = new PDO('mysql:host=sql6.freesqldatabase.com;dbname=sql6680105','sql6680105','7jmY3hkJyw');
    $con ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "yesss connect";
    //code...
} catch (PDOException $exc) {
    //throw $th;
    echo $exc ->getMessage();
    die("Cloud not connect");
}
