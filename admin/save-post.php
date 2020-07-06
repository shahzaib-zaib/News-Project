<?php
    include "config.php";

    if(isset($_FILES['fileToUpload'])){
        $errors = array();

        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext = strtolower(end(explode('.',$file_name)));


        $extentions = array("jpeg","jpg","png");




    }

    $title = mysqli_real_escape_string($con, $_POST['post_title']);
    $description = mysqli_real_escape_string($con, $_POST['postdesc']);
    $title = mysqli_real_escape_string($con, $_POST['post_title']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $date = date("d M Y");
    $author = $_SESSION['user_id'];


?>