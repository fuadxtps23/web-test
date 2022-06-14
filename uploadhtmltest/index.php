<?php
    $conn = mysqli_connect("localhost", "root", "", "blob");
    $sql = "CREATE TABLE IF NOT EXISTS `images` (
        `id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `image` LONGBLOB NOT NULL,
        `name` TEXT NOT NULL,
        `type` VARCHAR (11) NOT NULL
    )";
    mysqli_query($conn, $sql);
?>