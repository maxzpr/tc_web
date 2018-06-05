<?php 

    session_start();

    include 'Database.php';

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $grade = $_POST['grade'];

    $check = add_student($fname,$lname,$grade); //add_student มาจากไฟล์ Database.php

    if($check!=false){
        $_SESSION['message'] = 'บันทึกสำเร็จ';
    }else{
        $_SESSION['message'] = 'บันทึกล้มเหลว';
    }

    header('location:/show.php');

?>