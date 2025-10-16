<?php
include '../lib/db-conn.php';
if (isset($_POST['add-categories'])) {
    $cate_id = mt_rand(11111, 99999);
    $cate_name = $_POST['cate_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $status = $_POST['status'];
    $added_on = date('M d, Y h:i:s A');
    $updated_on = date('M d, Y h:i:s A');
    echo $added_on;

    $sql = "INSERT INTO fk_categories (cate_name, meta_title, meta_key, meta_desc, status, added_on, updated_on) VALUES ('$cate_name', '$meta_title', '$meta_key', '$meta_desc', '$status', '$added_on', '$updated_on')";
}
